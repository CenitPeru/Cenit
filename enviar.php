<?php
if(isset($_POST["nombre"])&&! empty($_POST["nombre"])&&
isset($_POST["apellido"])&&! empty($_POST["apellido"])&&
isset($_POST["email"])&&! empty($_POST["email"])&&
isset($_POST["texto"])&&! empty($_POST["texto"]))
$name= $_POST['nombre']."".$_POST['apellido'];
$mail= $_POST['email'];
$text= $_POST['texto'];

$header = 'From: ' . $mail .  "\r\n";
$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message = "Su email es: " . $mail . "\r\n";
$message = "El mensaje es: " . $text . "\r\n";

$para= 'kendysatomicos@hotmail.com'
$asunto = 'Asunto del mensaje'

mail($para,$asunto,utf8_decode($message),$header);
header("Location:index.html");
?>
