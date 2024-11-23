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
            $conexion = new mysqli($server, $user, $password, $database);

            if ($conexion->connect_errno) {
                die("Error de conexión: " . $conexion->connect_error);
            }

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

    // Nuevo método para iniciar sesión
    public function iniciarSesion($usuario, $contrasena) {
        global $server, $user, $password, $database;

        $conexion = new mysqli($server, $user, $password, $database);

        if ($conexion->connect_errno) {
            return "Error de conexión: " . $conexion->connect_error;
        }

        $consulta = "SELECT `contraseña` FROM `registro` WHERE `usuario` = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            if (password_verify($contrasena, $fila['contraseña'])) {
                $stmt->close();
                $conexion->close();
                return "ok";
            }
        }

        $stmt->close();
        $conexion->close();
        return "Usuario o contraseña incorrectos";
    }
}
?>


