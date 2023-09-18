<?php
require('fpdf/fpdf.php');

$tipoTramite = $_POST['tipoTramite'];
$fechaDocumento = $_POST['fechaDocumento'];
$remitente = $_POST['remitente'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$referencia = $_POST['referencia'];
$anexos = $_POST['anexos'];
$carpeta = $_POST['carpeta'];

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'Documento generado', 0, 1, 'C');
    }

    function FancyCell($text) {
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);
        $this->SetFont('', 'B');
        $this->Cell(0, 8, $text, 1, 1, 'L', true);
        $this->SetFont('');
        $this->SetFillColor(255);
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$pdf->FancyCell('Tipo de Tramite: ' . $tipoTramite);
$pdf->FancyCell('Fecha de Documento: ' . $fechaDocumento);
$pdf->FancyCell('Remitente: ' . $remitente);
$pdf->FancyCell('Tipo de Documento: ' . $tipoDocumento);
$pdf->FancyCell('Numero de Documento: ' . $numeroDocumento);
$pdf->FancyCell('Referencia: ' . $referencia);
$pdf->FancyCell('Anexos: ' . $anexos);
$pdf->FancyCell('Carpeta de Subida: ' . $carpeta);

$pdf->Output('D', 'documento.pdf');
?>

