<?php

require_once('libraries/phpmailer/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$rawJson = file_get_contents("php://input");
$data = json_decode($rawJson, true);

if (!is_array($data)) {
    http_response_code(400);
    die("Invalid JSON payload.");
}

$secretKey = $_ENV['TURNSTILE_SECRET_KEY'];
$token = trim($data['turnstile-token'] ?? '');

if ($token === '') {
    http_response_code(400);
    die("Captcha token missing.");
}

$turnstileData = [
    'secret'   => $secretKey,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init("https://challenges.cloudflare.com/turnstile/v0/siteverify");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $turnstileData);
$response = curl_exec($ch);

$result = json_decode($response, true);

if (empty($result["success"])) {
    http_response_code(403);
    die("Captcha verification failed.");
}

// Extract and validate all required fields (die if missing or empty)
$listing_type = trim($data['listing-type'] ?? '');
$full_name    = trim($data['full-name'] ?? '');
$email        = trim($data['email'] ?? '');
$whatsapp     = trim($data['teacher-whatsapp-number'] ?? '');

if ($listing_type === '' || $full_name === '' || $email === '' || $whatsapp === '') {
    http_response_code(400);
    die("All fields (listing-type, full-name, email, teacher-whatsapp-number) are required.");
}

// ---- SAVE TO DATABASE ---- //
$stmt = $conn->prepare("INSERT INTO teacher_applications
    (full_name, email, listing_type, whatsapp_number)
    VALUES (?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ssss",
    $full_name,
    $email,
    $listing_type,
    $whatsapp
);

if (!$stmt->execute()) {
    http_response_code(500);
    die("Execute failed: " . $stmt->error);
}

$stmt->close();

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
    $mail->addAddress('support@taskbucket.com', 'TaskBucket Support');

    $mail->isHTML(true);
    $mail->Subject = 'New Paid Listing on teachers.yogalife.lu';
    $mail->Body = "
        <h2>New Paid Listing</h2>
        <p><strong>Name:</strong> " . htmlspecialchars($full_name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Listing Type:</strong> " . htmlspecialchars($listing_type) . "</p>
        <p><strong>WhatsApp:</strong> " . htmlspecialchars($whatsapp) . "</p>
    ";

    $mail->send();
} catch (Exception $e) {
    error_log("Email failed: {$mail->ErrorInfo}");
}

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Application submitted successfully.'
]);
exit();