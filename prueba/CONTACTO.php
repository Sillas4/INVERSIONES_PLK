<?php
$destinatario="celestegchavez11@gmail.com"
$nombre = $_POST['nombre'];
$gmail = $_POST['gmail'];
$asunto = $_POST['asunto']
$mensaje = $_POST['mensaje']
$contenido= "Nombre: " . $nombre . "\nCorreo: " . $gmail . "\nAsunto: " . $asunto . "\nMensaje: " $mensaje;

mail($destinatario, "contacto", $contenido);
header("Location:../html.html");
?>