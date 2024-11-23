<?php
require_once('../models/registro.model.php');

$registroUsuarios = new RegistroUsuarios;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    $resultado = $registroUsuarios->iniciarSesion($usuario, $contrasena);

    if ($resultado === "ok") {
        // Redirige al archivo services.php si el inicio de sesión es exitoso
        header("Location: ../views/services.php");
        exit();
    } else {
        // Muestra un mensaje de error y regresa al formulario
        echo "<script>alert('$resultado'); window.history.back();</script>";
    }
}
?>

