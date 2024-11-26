<?php
require('../reports/fpdf.php');
require_once("../models/servidores.model.php");

// Crear el objeto PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(30, 10, 'Reporte total Servidores Internacionales');
$pdf->Ln(20);

// Encabezados de columnas
$texto = "";
$pdf->MultiCell(0, 5, iconv('UTF-8', 'windows-1252', $texto), 0, 'J');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 10, "#", 1);
$pdf->Cell(50, 10, "DNS", 1);
$pdf->Cell(50, 10, "Conección", 1);
$pdf->Cell(30, 10, "Velocidad", 1);
$pdf->Cell(30, 10, "Banda", 1);
$pdf->Ln();


// Conexión a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$database = "cover";

$conexion = new mysqli($server, $user, $password, $database);
if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta de registros
$query = "SELECT `ID_direccion`, `dns`, `conexion`, `velocidad`, `banda` FROM `conectividad`";
$resultado = $conexion->query($query);

$pdf->SetFont('Arial', '', 10);
$index = 1;
while ($registro = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 10, $index, 1);
    $pdf->Cell(50, 10, $registro["dns"], 1);
    $pdf->Cell(50, 10, $registro["conexion"], 1);
    $pdf->Cell(30, 10, $registro["velocidad"], 1);
    $pdf->Cell(30, 10, $registro["banda"], 1);
    $pdf->Ln();
    $index++;
}

// Cerrar la conexión
$conexion->close();

// Generar el PDF
$pdf->Output();
?>
