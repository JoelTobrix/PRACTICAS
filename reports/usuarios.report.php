<?php
require('../reports/fpdf.php');
require_once("../models/registro.model.php");

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Text(30, 10, 'Reporte total de Usuarios');
$pdf->SetFont('Arial', '', 12);

$texto = "Este es un reporte generado automáticamente.";
$pdf->MultiCell(0, 5, iconv('UTF-8', 'windows-1252', $texto), 0, 'J');

// Conexión a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$database = "cover";

// Crear conexión
$conexion = new mysqli($server, $user, $password, $database);
if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Ejecutar la consulta para obtener todos los usuarios
$query = "SELECT `usuario`, `contraseña` FROM `registro`";
$resultado = $conexion->query($query);

// Encabezados de columnas
$pdf->Cell(10, 10, "#", 1);
$pdf->Cell(50, 10, "Usuario", 1);
$pdf->Cell(70, 10, "Contraseña", 1);
$pdf->Ln();

$index = 1;
while ($usuario = $resultado->fetch_assoc()) {
    $pdf->Cell(10, 10, $index, 1);
    $pdf->Cell(50, 10, $usuario["usuario"], 1);
    $pdf->Cell(70, 10, $usuario["contraseña"], 1);
    $pdf->Ln();
    $index++;
}

// Cerrar la conexión
$conexion->close();

// Salida del PDF
$pdf->Output();
?>

