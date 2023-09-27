<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card ">
                    
                    <div class="card-header">Inicio de sesión</div>
                    <div class="card-body text-center">
                        <img src="logo.png" alt="ULS">
                        <br>
                        <form action="form.php" method = "POST">
                            <div class="mb-3">
                                <label class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" placeholder="Ingrese su contraseña">
                            </div>
                            <button type="submit" class="btn btn-secondary">Ingresar</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#">¿Olvidó su contraseña?</a>
                    </div>
                </div>
                <div class="car">
                    <br>
                <img class="v-image v-widget v-has-width" src="http://academico.ulasalle.edu.pe:8080/portal/VAADIN/themes/mytheme/icono-disponible-google-play.png" alt="" style="width: 200px;">
                <img class="v-image v-widget v-has-width" src="http://academico.ulasalle.edu.pe:8080/portal/VAADIN/themes/mytheme/app_store.png" alt="" style="width: 200px;">    
            </div>
            </div>
        </div>
    </div>
</body>
</html>


