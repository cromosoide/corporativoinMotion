<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$empresa = $_POST['empresa'];
$pais = $_POST['pais'];
$tipo_empresa = $_POST['tipo_empresa'];
$industria = $_POST['industria'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Empresa: " . $empresa . " \r\n";
$message .= "País: " . $pais . " \r\n";
$message .= "Tipo de empresa: " . $tipo_empresa . " \r\n";
$message .= "Industria: " . $industria . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'contactosantiago.mar@gmail.com';
$asunto = 'Formulario de web inMotion';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>