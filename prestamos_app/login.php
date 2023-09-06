<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* Establece la imagen de fondo */
        body {
            background-image: url('https://d31dn7nfpuwjnm.cloudfront.net/images/valoraciones/0040/7448/Es_posible_conseguir_un_pr%C3%A9stamo_sin_sustentar_ingresos.jpg?1605303435');
            background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
            background-repeat: no-repeat; /* Evita la repetición de la imagen */
            background-attachment: fixed; /* Mantiene la imagen fija en su lugar */
        }

        /* Estilos adicionales para el formulario */
        .card {
            margin-top: 15%;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para el formulario */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Iniciar Sesión</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="index.php">
                        <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                        <!-- Agrega un enlace para registrarse -->
                        <div class="text-center">
                            <a href="register.php">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye los archivos JavaScript de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
