<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'support@binace-exchange.site';
    $mail->Password   = 'Binance@11456';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 993;

    // ✅ Sender info (THIS is what you asked for)
    $mail->setFrom('support@Binance.com', 'Binance');

    // Optional: reply-to (if different from sender)
    $mail->addReplyTo('reply@example.com', 'Reply Name');

    // Recipient
    $mail->addAddress('tw.worldorg@gmail.com', 'Trust');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test';
    $mail->Body    = '<p>Hello, this email shows sender name and email.</p>';

    $mail->send();
    echo "Message sent successfully!";
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>
