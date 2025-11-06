<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../config.php');
echo "Config loaded successfully<br>";

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
} else {
    echo 'DB connected!<br>';
}

// ---- FORM FIELDS ---- //
$full_name   = $_POST['full-name'] ?? '';
$address     = $_POST['address'] ?? '';
$course      = $_POST['course'] ?? '';
$email       = $_POST['email'] ?? '';
$language    = $_POST['language'] ?? '';
$description = $_POST['description'] ?? '';
$terms       = ($_POST['terms-acceptance'] === 'Yes') ? 1 : 0;

echo "Step 2: Form fields loaded<br>";

// ---- IMAGE UPLOAD ---- //
$image_name = ''; // default if no image uploaded

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExt, $allowedExts)) {
        $newFileName = uniqid('teacher_', true) . '.' . $fileExt;
        $uploadDir = __DIR__ . '/../public/media/uploads/';
        echo "$uploadDir";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $image_name = $newFileName;
            echo "Step 3: Image uploaded successfully<br>";
        } else {
            echo json_encode(["status" => "error", "message" => "Error moving uploaded file."]);
            exit;
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid file type. Only JPG, PNG, GIF allowed."]);
        exit;
    }
} else {
    echo "No image uploaded<br>";
}

// ---- DATABASE INSERT ---- //
$stmt = $conn->prepare("INSERT INTO teacher_applications (full_name, address, course, email, language, description, terms, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

echo "Step 4: Statement prepared<br>";

$stmt->bind_param("ssssssis", $full_name, $address, $course, $email, $language, $description, $terms, $image_name);
echo "Step 5: Params bound<br>";

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Your application has been submitted!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Something went wrong: " . $stmt->error]);
}

$stmt->close();
$conn->close();
