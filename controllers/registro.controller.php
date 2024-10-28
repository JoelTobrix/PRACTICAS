<?php

// TODO: Controlador de Registro de Usuarios
require_once('../models/registro.model.php');
$registroUsuarios = new RegistroUsuarios;

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Llamar al método insertar en el modelo
    $resultado = $registroUsuarios->insertar($usuario, $contrasena);

    // Verificar el resultado e imprimir un mensaje
    if (strpos($resultado, 'Usuario registrado con éxito') !== false) {
        echo "<script>alert('Registro exitoso'); window.location.href='../views/login.php';</script>";
    } else {
        echo "<script>alert('Error en el registro: $resultado'); window.history.back();</script>";
    }
}
?>
