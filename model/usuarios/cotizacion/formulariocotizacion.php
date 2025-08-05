<?php
session_start();
require_once(__DIR__ . '/../../../config/Database.php');


$db = new Database();
$conn = $db->connect();

try {
    // Verificar sesión activa
    if (!isset($_SESSION['id_usuario'])) {
        throw new Exception("Usuario no autenticado.");
    }

    // Captura de datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $id_categoria = $_POST['id_categoria'] ?? '';
    $ancho = $_POST['ancho'] ?? '';
    $alto = $_POST['alto'] ?? '';
    $profundidad = $_POST['profundidad'] ?? '';
    $material = $_POST['material_principal'] ?? '';
    $color = $_POST['color'] ?? '';
    $herrajeria = $_POST['herrajeria'] ?? '';
    $ciudad = $_POST['ciudad'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $codigo = $_POST['codigo_descuento'] ?? '';
    $confirmacion = isset($_POST['confirmacion_envio']) ? 1 : 0;
    $id_usuario = $_SESSION['id_usuario'];
    $id_descuentos = $_POST['id_descuentos'] ?? 1; // valor simulado o predeterminado
    $materiales_extra = $_POST['materiales_extra'] ?? '';
    $transporte = $_POST['transporte_final'] ?? '';

    // Manejo de imagen
    $imagen_nombre = null;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $nombre_original = $_FILES['imagen']['name'];
        $tmp_path = $_FILES['imagen']['tmp_name'];
        $nombre_final = uniqid() . '_' . basename($nombre_original);
        $ruta_destino = __DIR__ . '/../../../view/images/imgreferencia/' . $nombre_final;

        if (move_uploaded_file($tmp_path, $ruta_destino)) {
            $imagen_nombre = $nombre_final;
        }
    }

    // Inserción en base de datos
    $stmt = $conn->prepare("INSERT INTO formulario_de_cotizacion (
        nombre, apellido, email, telefono, id_categoria, ancho, alto, profundidad,
        material_principal, color, herrajeria, ciudad, cantidad, confirmacion_envio,
        id_usuario, id_descuentos, materiales_extra, transporte, imagen_referencia
    ) VALUES (
        :nombre, :apellido, :email, :telefono, :id_categoria, :ancho, :alto, :profundidad,
        :material, :color, :herrajeria, :ciudad, :cantidad, :confirmacion_envio,
        :id_usuario, :id_descuentos, :materiales_extra, :transporte, :imagen_referencia
    )");

    $stmt->execute([
        ':nombre' => $nombre,
        ':apellido' => $apellido,
        ':email' => $email,
        ':telefono' => $telefono,
        ':id_categoria' => $id_categoria,
        ':ancho' => $ancho,
        ':alto' => $alto,
        ':profundidad' => $profundidad,
        ':material' => $material,
        ':color' => $color,
        ':herrajeria' => $herrajeria,
        ':ciudad' => $ciudad,
        ':cantidad' => $cantidad,
        ':confirmacion_envio' => $confirmacion,
        ':id_usuario' => $id_usuario,
        ':id_descuentos' => $id_descuentos,
        ':materiales_extra' => $materiales_extra,
        ':transporte' => $transporte,
        ':imagen_referencia' => $imagen_nombre
    ]);

    // Redirigir a formulario con éxito
    header("Location: ../../../view/formulariopersonalizado.php?cotizacion=exito");
    exit();
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}

$db->disconnect();
?>
