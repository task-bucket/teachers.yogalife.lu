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
$email       = $_POST['email'] ?? '';


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
        <p><strong>Name:</strong> {$full_name}</p>
        <p><strong>Email:</strong> {$email}</p>
    ";

    $mail->send();
   
} catch (Exception $e) {
    echo "Email failed: {$mail->ErrorInfo}<br>";
}
header("Location: $site_url/thank-you-paid");
