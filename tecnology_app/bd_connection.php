<?php
// Datos de conexión a la base de datos
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "tecnologia";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Puedes utilizar esta conexión en otros scripts para interactuar con la base de datos.

// Recuerda cerrar la conexión cuando hayas terminado de usarla.
// $conn->close();
?>
