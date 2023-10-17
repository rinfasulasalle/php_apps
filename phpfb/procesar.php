<?php
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$imagen = imagecreatetruecolor(400, 300);
$color_texto = imagecolorallocate($imagen, 143, 224, 60);

$texto = "Nombre: $nombre, Edad: $edad";
imagestring($imagen, 5, 160, 135, $texto, $color_texto);

header("Content-type: image/png");
imagepng($imagen);
?>
