<?php
$name= $_POST['nombre'];
$lastname= $_POST['apellido'];
$mail= $_POST['email'];
$text= $_POST['texto'];

$header = 'From: ' . $mail .  "\r\n";
$message = "Este mensaje fue enviado por: " . $name . $lastname . "\r\n";
$message = "Su email es: " . $mail . "\r\n";
$message = "El mensaje es: " . $text . "\r\n";

$para= 'kendysatomicos@hotmail.com'
$asunto = 'Asunto del mensaje'

mail($para,$asunto,utf8_decode($message),$header);
header("Location:index.html");
?>
