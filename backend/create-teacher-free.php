<?php

require_once('libraries/phpmailer/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$secretKey = $_ENV['TURNSTILE_SECRET_KEY'];
$token = $_POST['cf-turnstile-response'] ?? '';

if (!$token) {
    die("Captcha token missing.");
}

$data = [
    'secret' => $secretKey,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init("https://challenges.cloudflare.com/turnstile/v0/siteverify");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

if (!$result["success"]) {
    die("Captcha verification failed.");
}


$full_name   = $_POST['full-name'] ?? '';
$address     = $_POST['address'] ?? '';
$course      = $_POST['course'] ?? '';
$email       = $_POST['email'] ?? '';
$language    = $_POST['language'] ?? '';
$description = $_POST['description'] ?? '';
$listing_type = 'free';
$terms       = ($_POST['terms-acceptance'] === 'Yes') ? 1 : 0;


// ---- IMAGE UPLOAD + RESIZE (GD Library) ---- //
$image_name = ''; // default if no image uploaded
function resizeAndCropImage($sourcePath, $destPath, $size = 400)
{
    // Get original dimensions
    list($origWidth, $origHeight, $type) = getimagesize($sourcePath);

    // Determine shortest side
    $minSide = min($origWidth, $origHeight);

    // Calculate coordinates to crop center square
    $cropX = ($origWidth - $minSide) / 2;
    $cropY = ($origHeight - $minSide) / 2;

    // Create image resources
    $src = imagecreatefromstring(file_get_contents($sourcePath));
    $dst = imagecreatetruecolor($size, $size);

    // Preserve transparency for PNG/GIF
    if ($type == IMAGETYPE_PNG || $type == IMAGETYPE_GIF) {
        imagecolortransparent($dst, imagecolorallocatealpha($dst, 0, 0, 0, 127));
        imagealphablending($dst, false);
        imagesavealpha($dst, true);
    }

    // Copy cropped area to new square image
    imagecopyresampled(
        $dst, $src,
        0, 0,        // dst x,y
        $cropX, $cropY,  // src x,y
        $size, $size,    // dst width,height
        $minSide, $minSide // src width,height
    );

    // Save according to original type
    switch ($type) {
        case IMAGETYPE_PNG:
            imagepng($dst, $destPath, 8);
            break;
        case IMAGETYPE_GIF:
            imagegif($dst, $destPath);
            break;
        case IMAGETYPE_WEBP:
            imagewebp($dst, $destPath, 85);
            break;
        default:
            imagejpeg($dst, $destPath, 85);
    }

    imagedestroy($src);
    imagedestroy($dst);
}
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowedExts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (in_array($fileExt, $allowedExts)) {

        $random20 = '';
        for ($i = 0; $i < 20; $i++) {
            $random20 .= mt_rand(0, 9);
        }

        $newFileName = 'teacher_' . $random20 . '.' . $fileExt;
        $uploadDir = __DIR__ . '/../public/media/uploads/';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            resizeAndCropImage($destPath, $destPath, 400);
            $image_name = $newFileName;
        } else {
            die("Failed to move uploaded image file.");
        }
    } else {
        die("Invalid image type. Allowed: jpg, jpeg, png, gif, webp");
    }
} else {
    echo " No image uploaded<br>";
}
function createSlug($string) {
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}

$slug = createSlug($full_name);

// If full name empty, fallback slug
if (empty($slug)) {
    $slug = 'teacher-' . time();
}

// Ensure unique slug
$check = $conn->prepare("SELECT COUNT(*) FROM teacher_applications WHERE slug = ?");
$check->bind_param("s", $slug);
$check->execute();
$check->bind_result($count);
$check->fetch();
$check->close();
if ($count > 0) {
    $slug .= '-' . time();
}

// ---- DATABASE INSERT ---- //
$stmt = $conn->prepare("INSERT INTO teacher_applications 
(full_name, slug, address, course, email, language, description, terms, image, listing_type, approved) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ssssssssss",
    $full_name,
    $slug,
    $address,
    $course,
    $email,
    $language,
    $description,
    $terms,
    $image_name,
    $listing_type
);

if ($stmt->execute()) {

    // ---- SEND EMAIL ---- //
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USER'];
        $mail->Password = $_ENV['MAIL_PASS'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_USER'], 'YogaLife Luxembourg');

        $mail->addAddress('anurag42774@gmail.com', 'Anurag Harsh');

        $mail->isHTML(true);
        $mail->Subject = 'New Teacher Application Received';
        $mail->Body = "
            <h2>New Teacher Application</h2>
            <p><strong>Name:</strong> {$full_name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Course:</strong> {$course}</p>
            <p><strong>Address:</strong> {$address}</p>
            <p><strong>Language:</strong> {$language}</p>
            <p><strong>Description:</strong> {$description}</p>
        ";

        $mail->send();
       
    } catch (Exception $e) {
        echo "Email failed: {$mail->ErrorInfo}<br>";
    }
    header("Location: $site_url/thank-you");

} else {
    echo "Error inserting data: " . $stmt->error;
}


// header("Location: $site_url");


$stmt->close();
$conn->close();