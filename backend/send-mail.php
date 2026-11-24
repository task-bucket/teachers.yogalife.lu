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

// 1. Verify Cloudflare Turnstile Captcha
$secretKey = $_ENV['TURNSTILE_SECRET_KEY'];
$token = trim((string)($data['turnstile-token'] ?? ''));

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

$teacher_id   = filter_var($data['teacher-id'] ?? null, FILTER_VALIDATE_INT);
$sender_name  = trim((string)($data['name'] ?? ''));
$sender_email = trim((string)($data['email'] ?? ''));
$sender_phone = trim((string)($data['phone'] ?? ''));
$message      = trim((string)($data['message'] ?? ''));
$email_send   = trim((string)($data['email-send'] ?? ''));
$sent_to      = trim((string)($data['sent-to'] ?? ''));

if (
    !$teacher_id ||
    $sender_name === '' ||
    $sender_email === '' ||
    $sender_phone === '' ||
    $message === '' ||
    $email_send === '' ||
    $sent_to === ''
) {
    http_response_code(400);
    die("All fields are required.");
}

if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL) || !filter_var($email_send, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die("Invalid email format.");
}

// 3. Verify Teacher Email in Database (Prevents Hidden Field Tampering)
// Adjust table/column names (`teachers`, `email`) if yours differ
$checkStmt = $conn->prepare("SELECT email FROM teachers WHERE id = ? LIMIT 1");
if (!$checkStmt) {
    http_response_code(500);
    die("Database prepare failed: " . $conn->error);
}

$checkStmt->bind_param("i", $teacher_id);
$checkStmt->execute();
$checkStmt->bind_result($db_teacher_email);
$teacherFound = $checkStmt->fetch();
$checkStmt->close();

if (!$teacherFound) {
    http_response_code(404);
    die("Teacher not found.");
}

// Strict case-insensitive match between DB email and frontend hidden field
if (strcasecmp(trim($db_teacher_email), $email_send) !== 0) {
    http_response_code(403);
    die("Recipient email mismatch.");
}

$verified_recipient_email = trim($db_teacher_email);

// 4. Save Inquiry to Database
$stmt = $conn->prepare("INSERT INTO teacher_inquiries 
    (teacher_id, teacher_name, teacher_email, sender_name, sender_email, sender_phone, message) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "issssss",
    $teacher_id,
    $sent_to,
    $verified_recipient_email,
    $sender_name,
    $sender_email,
    $sender_phone,
    $message
);

if (!$stmt->execute()) {
    http_response_code(500);
    die("Execute failed: " . $stmt->error);
}

$stmt->close();

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['MAIL_USER'];
    $mail->Password   = $_ENV['MAIL_PASS'];
    $mail->SMTPSecure = 'tls';
    $mail->Port       = $_ENV['MAIL_PORT'];

    $mail->setFrom($_ENV['MAIL_USER'], 'YogaLife Luxembourg');
    $mail->addAddress($verified_recipient_email, $sent_to);
    $mail->addReplyTo($sender_email, $sender_name);

    $mail->isHTML(true);
    $mail->Subject = 'New Inquiry from ' . $sender_name . ' - YogaLife Luxembourg';
    $mail->Body = "
        <h2>New Student Inquiry</h2>
        <p>Hi " . htmlspecialchars($sent_to) . ", you have received a new inquiry via your YogaLife Luxembourg profile:</p>
        <p><strong>Name:</strong> " . htmlspecialchars($sender_name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($sender_email) . "</p>
        <p><strong>Phone:</strong> " . htmlspecialchars($sender_phone) . "</p>
        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->send();
} catch (Exception $e) {
    error_log("Inquiry email failed: {$mail->ErrorInfo}");
    http_response_code(500);
    die("Failed to send inquiry email.");
}

header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Your inquiry has been sent successfully.'
]);
exit();