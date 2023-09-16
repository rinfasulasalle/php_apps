<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de placas base</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-title {
      color: orange;
      font-weight: bold;
    }
    .card {
    border-width: 10px;
    border-radius: 3.9em;
    }
    .card-img-top {
        width: 422px;
        height: 422px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Lista de placas base</h1>

  <?php

// Conectar a la base de datos
$db = new PDO("mysql:host=localhost;dbname=tec", "root", "");

// Consultar todos los registros de la tabla
$sql = "SELECT * FROM placa_madre";
$resultado = $db->query($sql);

// Iterar sobre los resultados
while ($registro = $resultado->fetch()) {

  // Mostrar la tarjeta
  echo "<div class='card mb-3' style='border-color: orange'>";

    // Row 1
    echo "<div class='card-header'>";
      echo "<h5 class='card-title text-center text-uppercase text-orange'>" . $registro['nombre_completo'] . "</h5>";
    echo "</div>";

    // Row 2
    echo "<div class='card-body'>";
        echo "<div class='row'>";
            echo "<div class='col-6'>";
                echo "<img src='" . $registro['imagene1'] . "' class='card-img-top' alt='Imagen de la placa base'>";
            echo "</div>";
            echo "<div class='col-6'>";
                echo "<h5 class='card-title text-orange'>Ranuras de expansión:</h5>";

                // Mostrar las ranuras de expansión con un - en cada línea
                $ranuras_expansion = explode("\n", $registro['ranuras_expansion']);
                foreach ($ranuras_expansion as $ranura) {
                    echo "<p class='card-text'>- " . $ranura . "</p>";
                }
            echo "</div>";
        echo "</div>";
    echo "</div>";

    // Row 3
    echo "<div class='card-body'>";
        echo "<div class='row'>";
            echo "<div class='col-6'>";
                echo "<h5 class='card-title text-orange'>Almacenamiento:</h5>";

                // Mostrar el almacenamiento con un - en cada línea
                $almacenamiento = explode("\n", $registro['almacenamiento']);
                foreach ($almacenamiento as $almacena) {
                    echo "<p class='card-text'>- " . $almacena . "</p>";
                }
            echo "</div>";
            echo "<div class='col-6'>";
                echo "<img src='" . $registro['imagene2'] . "' class='card-img-top' alt='Imagen de la placa base'>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    // Row 4
    echo "<div class='card-body'>";
        echo "<div class='row'>";
            echo "<div class='col-6'>";
                echo "<img src='" . $registro['imagene3'] . "' class='card-img-top' alt='Imagen de la placa base'>";
            echo "</div>";
            echo "<div class='col-6'>";
                echo "<h5 class='card-title text-orange'>Puertos panel posterior:</h5>";

                // Mostrar los puertos del panel posterior con un - en cada línea
                $puertos_panel_posterior = explode("\n", $registro['puertos_panel_posterior']);
                foreach ($puertos_panel_posterior as $puerto) {
                    echo "<p class='card-text'>- " . $puerto . "</p>";
                }
            echo "</div>";
        echo "</div>";
    echo "</div>";

  echo "</div>";
}

?>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
