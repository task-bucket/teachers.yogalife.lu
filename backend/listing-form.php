<?php

require_once('libraries/phpmailer/vendor/autoload.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$secretKey = $_ENV['TURNSTILE_SECRET_KEY'];
$token = $_POST['turnstile-token'] ?? '';

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

$listing_type = $_POST['listing-type'] ?? '';
$full_name    = $_POST['full-name'] ?? '';
$email        = $_POST['email'] ?? '';
$whatsapp     = $_POST['teacher-whatsapp-number'] ?? '';

$stmt = $conn->prepare("INSERT INTO teacher_applications 
    (full_name, email, listing_type, whatsapp_number) 
    VALUES (?, ?, ?, ?)");

if (!$stmt) {
    die("❌ Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ssss",
    $full_name,
    $email,
    $listing_type,
    $whatsapp
);

if (!$stmt->execute()) {
    die("❌ Execute failed: " . $stmt->error);
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

header("Location: $site_url/thank-you-paid");
exit();