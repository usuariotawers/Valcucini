<?php
require_once(__DIR__ . '/../config/database.php');
require_once(__DIR__ . '/../model/LoginModel.php');
session_start();

$db = new Database();
$modelo = new LoginModel($db->connect());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['registro'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $exito = $modelo->registrarUsuario($nombre, $apellido, $correo, $contrasena);

        if ($exito) {
            $_SESSION['mensaje'] = 'Registro exitoso';
        } else {
            $_SESSION['error'] = 'Error al registrar usuario';
        }
        header('Location: ../view/cliente.php');
        exit;
    }

    if (isset($_POST['login'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $usuario = $modelo->iniciarSesion($correo, $contrasena);

        if ($usuario) {
            $_SESSION['usuario'] = $usuario;
            header('Location: ../view/cliente.php');
            exit;
        } else {
            $_SESSION['error'] = 'Credenciales incorrectas';
            header('Location: ../index.php');
            exit;
        }
    }
}
