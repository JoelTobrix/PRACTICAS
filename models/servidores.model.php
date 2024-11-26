<?php
// Configuración de conexión a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$database = "cover";

class Conectividad {
    public function consultar() {
        global $server, $user, $password, $database;

        try {
            $conexion = new mysqli($server, $user, $password, $database);
            if ($conexion->connect_errno) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            $query = "SELECT * FROM `conectividad`";
            $resultado = $conexion->query($query);

            if ($resultado->num_rows > 0) {
                $registros = [];
                while ($fila = $resultado->fetch_assoc()) {
                    $registros[] = $fila;
                }
                $conexion->close();
                return $registros;
            } else {
                $conexion->close();
                return "No se encontraron registros.";
            }
        } catch (Exception $e) {
            return "Excepción capturada: " . $e->getMessage();
        }
    }
}
?>
