<?php
$enviado = false;
$errores = "";

$nommbre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

//verificamos los datos
if (!empty($nombre)) {
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
}

if (!empty($email)) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
}

if (!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);
}

//datos para el correo
$destinatario = " info@almarservicios.com";
$asunto = "Contacto desde la WEB";

$mensajePreparado = "De: $nommbre \n";
$mensajePreparado .= "Email: $email \n";
$mensajePreparado .= "Mensaje: $mensaje";

//enviando mensaje
mail($destinatario,$asunto,$mensajePreparado);
header('Location:index.php');
$enviado=true;


?>