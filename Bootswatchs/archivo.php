<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Servicio',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require "conexion.php";
$consulta = "SELECT * FROM grupouno";
$resultado  = $link->query($consulta);




$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while ($row = $resultado->fetch_assoc()) {
    # code...
    $pdf->Cell(90,10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['apep'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['apm'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['horas'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['estudios'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['revisitas'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['videos'], 1, 0, 'C', 0);
    $pdf->Cell(90,10, $row['detalles'], 1, 0, 'C', 0);

}


$pdf->Output();
?>