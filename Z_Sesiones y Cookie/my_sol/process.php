<?php
date_default_timezone_set("America/Mexico_City");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["correo_electronico"];
    $password = $_POST["contraseña"];
    $fechaNacimiento = $_POST["fecha_de_nacimiento"];
    $intereses = $_POST["intereses"];

    $usuario = array(
        "nombre" => $nombre,
        "correo" => $email,
        "contraseña" => $password,
        "fecha_nacimiento" => $fechaNacimiento,
        "intereses" => $intereses,
        "ultima_sesion" => date("d/m/Y H:i:s")
    );

    $_SESSION["usuarios"][] = $usuario;

    $fechaHoraActual = date("d/m/Y H:i:s");
    setcookie("ultima_sesion", $fechaHoraActual, time() + 3600); // Cookie expira en 1 hora

    header("Location: profile.php");
    exit();
}
?>
