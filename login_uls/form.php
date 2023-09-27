<?php
if ($_POST['usuario'] == 'admin' && $_POST['contrasena'] == 'admin') {
    header("Location: admin.php");
    exit();
} else {
    echo "<h1>Usuario o contraseña incorrectos</h1>";
}
?>