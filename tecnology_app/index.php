<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "tecnologia";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Procesadores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo personalizado para ajustar al tamaño de página A4 */
        @media print {
            body {
                width: 210mm;
                height: 297mm;
                margin: 5px;
            }

            .card {
            border: thick solid black;
        }
        }

        /* Estilo personalizado para ajustar el tamaño de las imágenes */
        

        /* Resto de estilos CSS (sin cambios) */
        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            padding: 20px;
        }

        .card {
            margin-bottom: 10px;
            border: thick solid black;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- -->
    <h2>Lista de Procesadores</h2>
    <div class="container">
        <div class="row">
            <?php
            // Consulta SQL para obtener registros de la tabla "procesadores"
            $sql = "SELECT * FROM procesadores";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Mostrar cada registro en una carta de Bootstrap
                    echo '<div class="col-md-12 mb-4">';
                    echo '<div class="card">';
                    echo '<div class="row no-gutters">';
                    echo '<div class="col-md-4">';
                    echo '<img src="' . $row['ruta_imagen_referencial'] . '" class="card-img" alt="Imagen Referencial" style="max-width: 300px; max-height: 300px;">';
                    echo '</div>';
                    echo '<div class="col-md-8">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title" style="font-size: 24px; color: red;">' . $row['nombre_completo'] . '</h5>';
                    echo '<p class="card-text">Marca: ' . $row['marca'] . '</p>';
                    echo '<p class="card-text">Frecuencia Base/Máxima: ' . $row['frecuencia_base'] . ' GHz/ '.$row['frecuencia_maxima'].'GHz.</p>';
                    //echo '<p class="card-text">Frecuencia Máxima: ' . $row['frecuencia_maxima'] . 'GHz</p>';
                    echo '<p class="card-text">Socket : ' . $row['socket'] . '</p>';
                    echo '<p class="card-text">Caché: ' . $row['cache'] . '</p>';
                    echo '<p class="card-text">Tamaño Memoria Máximo: ' . $row['tamano_memoria_maximo'] . '</p>';
                    echo '<p class="card-text">Tipos Memoria Compatibles: ' . $row['tipos_memoria_compatibles'] . '</p>';
                    echo '<p class="card-text">Gráficos Procesador: ' . $row['graficos_procesador'] . '</p>';
                    echo '<p class="card-text">Precio: $' . $row['precio_dolares'] . '</p>';
                    // Agregar más campos según sea necesario
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No se encontraron registros de procesadores.";
            }
            ?>
            
        </div>
    </div>
    <!-- -->
    <!---->
    <h2>Lista de Unidades de Almacenamiento</h2>
    <div class="container">
        <div class="row">
            <?php
            // SQL query to retrieve records from the "unidad_almacenamiento" table
            $sql = "SELECT * FROM unidad_almacenamiento";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Display each record in a Bootstrap card
                    echo '<div class="col-md-12 mb-4">';
                    echo '<div class="card">';
                    echo '<div class="row no-gutters">';
                    echo '<div class="col-md-4">';
                    echo '<img src="' . $row['ruta_imagen'] . '" class="card-img" alt="Imagen">';
                    echo '</div>';
                    echo '<div class="col-md-8">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title" style="font-size: 24px; color: red;"> Nombre: ' . $row['nombre_comercial_largo'] . '</h5>';
                    echo '<p class="card-text">Marca: ' . $row['marca'] . '</p>';
                    echo '<p class="card-text">ESPECIFICACIONES TÉCNICAS</p>';
                    echo '<p class="card-text">Tecnología: ' . $row['tecnologia'] . '</p>';
                    echo '<p class="card-text">Interfaz: ' . $row['interfaz'] . '</p>';
                    echo '<p class="card-text">Capacidad de Almacenamiento: ' . $row['capacidad_almacenamiento'] . ' GB</p>';
                    echo '<p class="card-text">Memoria Cache: ' . $row['memoria_cache'] . ' MB</p>';
                    echo '<p class="card-text">Velocidad de Rotación: ' . $row['velocidad_rotacion'] . ' RPM</p>';
                    echo '<p class="card-text">Tasa de Transferencia: ' . $row['tasa_transferencia'] . ' MB/s</p>';
                    echo '<p class="card-text">Precio: $' . number_format($row['precio'], 2) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No se encontraron registros de unidades de almacenamiento.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    <!-- -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> 
    <script>
        // Función para exportar la lista de procesadores a PDF
        function exportToPDF() {
            const doc = new jsPDF();
            doc.text('Lista de Procesadores', 10, 10);

            // Obtener todas las tarjetas de procesadores y sus detalles
            const cards = document.querySelectorAll('.card');

            let y = 20; // Posición vertical inicial

            // Iterar a través de las tarjetas y agregar contenido al PDF
            cards.forEach((card, index) => {
                const cardDetails = card.innerText.trim();
                y += 10; // Espacio entre cada tarjeta
                doc.text(cardDetails, 10, y);
            });

            // Guardar el PDF con un nombre específico
            doc.save('lista_procesadores.pdf');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>