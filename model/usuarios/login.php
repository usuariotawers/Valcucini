<?php
session_start();
require_once("../../config/Database.php");

$db = new Database();
$conn = $db->connect();

$email = $_POST['email'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

try {
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['id_rol'] = $usuario['id_rol'];

        if ($usuario['id_rol'] == 1) {
            header("Location: /mvc/view/admin/home.php");
        } else {
            header("Location: /mvc/view/cliente.php");
        }
        exit;
    } else {
        echo "⚠️ Correo o contraseña incorrectos.";
    }
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}

$db->disconnect();
?>
