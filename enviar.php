<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre ." \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'certifakt@certicom.com.pe';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
header("location:http://www.certicom.com.pe/index.html"); 


?>