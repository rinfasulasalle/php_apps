<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página - Usuarios</title>
    <!-- Incluye los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

    <div class="container mt-5">
        <h1>Listado de Usuarios</h1>

        <?php
        require_once("bd_connection.php");

        // Función para mostrar un mensaje de éxito o error
        function mostrarMensaje($mensaje, $esError = false) {
            $clase = $esError ? 'alert-danger' : 'alert-success';
            echo "<div class='alert $clase'>$mensaje</div>";
        }

        // Check if the form for creating a new user is submitted
        if (isset($_POST['accion']) && $_POST['accion'] === 'crear_usuario') {
            $nombreUsuario = $_POST['nombre'];

            // Realizar la inserción en la base de datos (debes agregar validación y manejo de errores)
            $sql = "INSERT INTO Usuarios (nombre) VALUES ('$nombreUsuario')";
            if ($conn->query($sql) === TRUE) {
                mostrarMensaje("Usuario creado exitosamente.");
            } else {
                mostrarMensaje("Error al crear el usuario.", true);
            }
        }

        // Check if a specific action is requested (edit, delete)
        if (isset($_POST['accion'])) {
            $accion = $_POST['accion'];

            // Edit an existing user
            if ($accion === 'editar_usuario') {
                $idUsuario = $_POST['id_usuario'];
                $nuevoNombre = $_POST['nuevo_nombre'];

                // Realizar la actualización en la base de datos (debes agregar validación y manejo de errores)
                $sql = "UPDATE Usuarios SET nombre='$nuevoNombre' WHERE id=$idUsuario";
                if ($conn->query($sql) === TRUE) {
                    mostrarMensaje("Usuario actualizado exitosamente.");
                } else {
                    mostrarMensaje("Error al actualizar el usuario.", true);
                }
            }
        }

        // Delete a user
        if (isset($_GET['eliminar'])) {
            $idUsuarioEliminar = $_GET['eliminar'];

            // Realizar la eliminación en la base de datos (debes agregar validación y manejo de errores)
            $sql = "DELETE FROM Usuarios WHERE id=$idUsuarioEliminar";
            if ($conn->query($sql) === TRUE) {
                mostrarMensaje("Usuario eliminado exitosamente.");
            } else {
                mostrarMensaje("Error al eliminar el usuario.", true);
            }
        }
        ?>

        <!-- Formulario para crear un nuevo usuario -->
        <h2>Agregar Nuevo Usuario</h2>
        <form method="POST">
            <input type="hidden" name="accion" value="crear_usuario">
            <div class="form-group">
                <label for="nombre">Nombre de Usuario</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Usuario</button>
        </form>

        <!-- Lista de Usuarios -->
        <h2>Usuarios Existentes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre de Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Realiza una consulta SELECT en la base de datos
                $sql = "SELECT * FROM Usuarios";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['dni'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>
                            <button class='btn btn-warning' data-toggle='modal' data-target='#editModal" . $row['id'] . "'>Editar</button>
                            <a class='btn btn-danger' href='Usuarios.php?eliminar=" . $row['id'] . "'>Eliminar</a>
                          </td>";
                    echo "</tr>";

                    // Edit Modal
                    echo "<div class='modal fade' id='editModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='editModalLabel'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='editModalLabel'>Editar Usuario</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <form method='POST'>
                                            <input type='hidden' name='accion' value='editar_usuario'>
                                            <input type='hidden' name='id_usuario' value='" . $row['id'] . "'>
                                            <div class='form-group'>
                                                <label for='nuevo_nombre'>Nuevo Nombre</label>
                                                <input type='text' class='form-control' id='nuevo_nombre' name='nuevo_nombre' required>
                                            </div>
                                            <button type='submit' class='btn btn-primary'>Guardar Cambios</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Incluye los archivos JavaScript de Bootstrap al final del documento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
