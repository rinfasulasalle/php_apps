<?php

session_start();
if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fecha_nacimiento'])) {
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$_SESSION['nombre'] = $nombre;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['fecha_nacimiento'] = $fecha_nacimiento;
setcookie('inicio_sesion', date('Y-m-d H:i:s'), time() + 3600);
header('Location: perfil.php');
} else {
echo "Por favor, complete todos los campos del formulario.";
}
?>
