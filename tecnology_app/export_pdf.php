<?php
// require('fpdf/fpdf.php');
require('tecnology_app\fpdf\fpdf.php');

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configurar fuente y tamaño del texto
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Lista de Procesadores', 0, 1, 'C');

// Consulta SQL para obtener registros de la tabla "procesadores"
$sql = "SELECT * FROM procesadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Configurar encabezados de la tabla
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Nombre', 1);
    $pdf->Cell(40, 10, 'Marca', 1);
    $pdf->Cell(40, 10, 'Frecuencia Base (GHz)', 1);
    $pdf->Cell(40, 10, 'Frecuencia Máxima (GHz)', 1);
    $pdf->Cell(30, 10, 'Precio ($)', 1);
    $pdf->Ln();

    // Recorrer los registros y agregarlos al PDF
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row['nombre_completo'], 1);
        $pdf->Cell(40, 10, $row['marca'], 1);
        $pdf->Cell(40, 10, $row['frecuencia_base'], 1);
        $pdf->Cell(40, 10, $row['frecuencia_maxima'], 1);
        $pdf->Cell(30, 10, $row['precio_dolares'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(190, 10, 'No se encontraron registros de procesadores.', 1, 1, 'C');
}

// Salida del PDF
$pdf->Output();
?>
