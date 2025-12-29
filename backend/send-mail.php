<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('libraries/phpmailer/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';
$email_send = $_POST['email-send'] ?? '';


$stmt = $conn->prepare("INSERT INTO enquiry_form 
(name, email, phone, message) 
VALUES (?, ?, ?, ?)");

if (!$stmt) {
    die("❌ Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ssis",
    $name,
    $email,
    $phone,
    $message
);

if ($stmt->execute()) {

    // ---- SEND EMAIL ---- //
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $email_send;
        $mail->Password = $_ENV['MAIL_PASS'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_USER'], 'YogaLife Luxembourg');
        $mail->addAddress($_ENV['MAIL_USER'], 'YogaLife Luxembourg');

        $mail->isHTML(true);
        $mail->Subject = 'New Teacher Application Received';
        $mail->Body = "
            <h2>New Teacher Application</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong> {$message}</p>
           
        ";

        $mail->send();
       
    } catch (Exception $e) {
        echo "⚠️ Email failed: {$mail->ErrorInfo}<br>";
    }

} else {
    echo "Error inserting data: " . $stmt->error;
}


// header("Location: " . $_SERVER['HTTP_REFERER']);
header("Location: " . $site_url . '/mail-sent');
$stmt->close();
$conn->close();




?>