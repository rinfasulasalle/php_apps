<?php
// Incluir el archivo de conexión a la base de datos
require_once("bd_connection.php");
// Ahora puedes usar la conexión $conn para ejecutar consultas o interactuar con la base de datos.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <!-- Incluye los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Agrega tu archivo de CSS personalizado -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://img.freepik.com/vector-premium/prestamo-efectivo-credito-finanzas-logotipo-icono-ilustracion-marca-identidad_7109-752.jpg?w=2000" width="60px"alt="Tu Logo">Aplicacion Web Prestamista</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="type_users.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users.php">Préstamos</a>
                </li>
            </ul>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link btn btn-primary" href="login.php">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Bienvenido a nuestro servicio de préstamos</h1>
            <p class="lead">Ofrecemos préstamos flexibles y atractivos para tus necesidades financieras.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="https://kapitalizateya.com/wp-content/uploads/2023/06/prestamo.jpeg" class="card-img-top" alt="Préstamo">
                    <div class="card-body">
                        <h5 class="card-title">¿Por qué elegir nuestro servicio?</h5>
                        <p class="card-text">Ofrecemos tasas de interés competitivas y un proceso de solicitud de préstamo rápido y sencillo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="https://linkeatuabogado.com/wp-content/uploads/2019/10/figura-empresa.png" class="card-img-top" alt="Tipos de Préstamos">
                    <div class="card-body">
                        <h5 class="card-title">Tipos de Préstamos</h5>
                        <p class="card-text">Ofrecemos préstamos para vivienda, educación, negocios y otros fines.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-5">Proceso de Solicitud de Préstamo</h2>
        <p class="text-center">Completa el formulario a continuación para solicitar un préstamo y comenzar tu proceso de aprobación.</p>

        <form>
        <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="monto">Monto del Préstamo:</label>
                <input type="number" class="form-control" id="monto" placeholder="Ingrese el monto">
            </div>
            <div class="form-group">
                <label for="plazo">Plazo (en meses):</label>
                <input type="number" class="form-control" id="plazo" placeholder="Ingrese el plazo">
            </div>
            <div class="form-group">
                <label for="motivo">Motivo del Préstamo:</label>
                <select class="form-control" id="motivo">
                    <option value="vivienda">Vivienda</option>
                    <option value="educacion">Educación</option>
                    <option value="negocio">Negocio</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comentarios">Comentarios:</label>
                <textarea class="form-control" id="comentarios" rows="4" placeholder="Ingrese comentarios adicionales"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        </form>

    </div>

    <!-- Incluye los archivos JavaScript de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
