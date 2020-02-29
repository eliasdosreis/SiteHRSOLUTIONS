<?php
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$titulo = $_POST['subject'];
$message = $_POST['message'];
$subject = "Mensagem do Site";

$headers = array("From: " . $email,
"Reply-To: " . $email,
"X-Mailer: PHP/" . PHP_VERSION);

// Dados que serão enviados
$corpo = "Formulário da página de contato --- {$name} <br>";
$corpo .= "Nome: {$name} <br>";
$corpo .= "Telefone: {$titulo}  <br>";
$corpo .= "Email: {$email} <br>";
$corpo .= "Mensagem:  {$message}  <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'elias_dos_reis@hotmail.com';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

echo $corpo;