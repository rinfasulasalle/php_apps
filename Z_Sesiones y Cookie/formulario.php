<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>
    <h1>Formulario de Inicio de Sesión</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>
    <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
