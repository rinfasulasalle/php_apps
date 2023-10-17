<?php
date_default_timezone_set("America/Mexico_City");

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Perfil del Usuario</title>
</head>
<body>
  <h1>Perfil del Usuario</h1>
  <?php
  if (isset($_SESSION["usuarios"])) {
    foreach ($_SESSION["usuarios"] as $usuario) {
      echo "<h2>Datos del Usuario:</h2>";
      echo "<p>Nombre: " . $usuario["nombre"] . "</p>";
      echo "<p>Correo Electrónico: " . $usuario["correo"] . "</p>";
      echo "<p>Fecha de Nacimiento: " . $usuario["fecha_nacimiento"] . "</p>";
      echo "<p>Intereses: " . implode(", ", $usuario["intereses"]) . "</p>";
      echo "<p>Última Sesión: " . $usuario["ultima_sesion"] . "</p>";
    }
  } else {
    echo "<p>No hay usuarios registrados.</p>";
  }

  if (isset($_COOKIE["ultima_sesion"])) {
    echo "<h2>Última Sesión Global:</h2>";
    echo "<p>Fecha y Hora: " . $_COOKIE["ultima_sesion"] . "</p>";
  }
  ?>

  <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
