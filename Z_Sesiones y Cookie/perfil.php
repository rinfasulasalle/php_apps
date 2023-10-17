<?php
session_start();
if(isset($_SESSION['nombre'])) {
if(isset($_COOKIE['inicio_sesion'])) {
$ultimo_inicio_sesion = $_COOKIE['inicio_sesion'];
$tiempo_transcurrido = time() - strtotime($ultimo_inicio_sesion);
$minutos_transcurridos = round($tiempo_transcurrido / 60);
} else {
$minutos_transcurridos = "N/A";
}
echo "<h1>Bienvenido, " . $_SESSION['nombre'] . "!</h1>";
echo "<p>Correo Electrónico: " . $_SESSION['email'] . "</p>";
echo "<p>Fecha de Nacimiento: " . $_SESSION['fecha_nacimiento'] . "</p>";
echo "<p>Tiempo desde el último inicio de sesión: " . $minutos_transcurridos . " minutos</p>";

echo '<form action="cerrar_sesion.php" method="post"><input type="submit" value="Cerrar Sesión"></form>';
} else {

header('Location: formulario.php');
}
?>
