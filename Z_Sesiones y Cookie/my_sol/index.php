<!DOCTYPE html>
<html>
<head>
  <title>Formulario de registro</title>
</head>
<body>
  <h1>Formulario de registro</h1>
  <form action="process.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="correo_electronico">Correo electrónico:</label><br>
    <input type="email" id="correo_electronico" name="correo_electronico"><br>
    <label for="contraseña">Contraseña:</label><br>
    <input type="password" id="contraseña" name="contraseña"><br>
    <label for="fecha_de_nacimiento">Fecha de nacimiento:</label><br>
    <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento"><br>
    <label for="intereses">Intereses:</label><br>
    <select multiple name="intereses[]">
      <option value="Deportes">Deportes</option>
      <option value="Música">Música</option>
      <option value="Películas">Películas</option>
    </select><br><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
