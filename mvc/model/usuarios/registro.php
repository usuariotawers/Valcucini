<?php
require_once("../../config/Database.php");

$db = new Database();
$conn = $db->connect();

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';
$id_rol = 2; // Rol cliente por defecto


try {
    // Hashear la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Preparar sentencia SQL
    $stmt = $conn->prepare("INSERT INTO usuario (nombre, email, contrasena, id_rol)
                            VALUES (:nombre, :email, :contrasena, :id_rol)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contrasena', $contrasena_hash);
    $stmt->bindParam(':id_rol', $id_rol);
    $stmt->execute();

    // Redirigir a formulario con mensaje de éxito
    header("Location: /mvc/view/cliente.php?registro=exito");
    exit;
} catch (PDOException $e) {
    // Si el error es por email duplicado, mostrar mensaje personalizado
    if ($e->getCode() == 23000) {
        echo "⚠️ Este correo ya está registrado. Intenta con otro.";
    } else {
        echo "❌ Error al registrar usuario: " . $e->getMessage();
    }
}

$db->disconnect();
?>
