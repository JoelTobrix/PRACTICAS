<?php
// Configuración de conexión a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$database = "cover";

class RegistroUsuarios {

    public function insertar($usuario, $contrasena) {
        global $server, $user, $password, $database;
        
        try {
            // Crear la conexión
            $conexion = new mysqli($server, $user, $password, $database);

            if ($conexion->connect_errno) {
                die("Error de conexión: " . $conexion->connect_error);
            }

            // Encriptar la contraseña
            $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
            $cadena = "INSERT INTO `registro` (`usuario`, `contraseña`) VALUES ('$usuario', '$contrasena_hash')";

            if ($conexion->query($cadena) === TRUE) {
                $resultado = "Usuario registrado con éxito. ID de registro: " . $conexion->insert_id;
            } else {
                $resultado = "Error al registrar el usuario: " . $conexion->error;
            }
            
            $conexion->close();
            return $resultado;
        } catch (Exception $th) {
            return "Excepción capturada: " . $th->getMessage();
        }
    }
}
?>

