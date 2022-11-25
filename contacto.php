<?php
$name = $_POST['introducir_nombre'];
$mail = $_POST['introducir_email'];
$asunto = $_POST['introducir_asunto'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['introducir_mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'edgarpluis@gmail.com';

mail($para, $asunto, utf8_decode($message), $header);

header("location:exito.html");
?>