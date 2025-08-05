<?php
require_once(__DIR__ . '/../../controller/dashboard/ProductoController.php');

// Activar errores en desarrollo
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Instancia del controlador
$controller = new ProductoController();

// Recolectar datos del formulario
$nombre      = $_POST['product_name']        ?? '';
$descripcion = $_POST['product_description'] ?? '';
$tipo        = $_POST['product_type']        ?? '';
$categoria   = $_POST['product_category']    ?? '';
$imagen      = '';

// Validación básica
if (!$nombre || !$tipo || !$categoria) {
    echo "Faltan datos obligatorios.";
    exit;
}

// Subida de imagen
if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === 0) {
    $rutaDestino = __DIR__ . '/../../public/uploads/productos/';
    
    // Crear carpeta si no existe
    if (!is_dir($rutaDestino)) {
        mkdir($rutaDestino, 0777, true);
    }

    $nombreArchivo = uniqid() . '_' . basename($_FILES['product_image']['name']);
    $rutaCompleta = $rutaDestino . $nombreArchivo;

    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $rutaCompleta)) {
        // Ruta relativa para guardar en DB
        $imagen = 'uploads/productos/' . $nombreArchivo;
    } else {
        echo "Error al mover la imagen al servidor.";
        exit;
    }
}

// Guardar producto
$resultado = $controller->guardarProducto($nombre, $descripcion, $tipo, $imagen, $categoria);

// Verificar resultado (esperamos un array con ['success'=>bool, 'message'=>string])
if (is_array($resultado) && $resultado['success']) {
    // Redirigir con éxito
    header("Location: ../../view/admin/productos.php?success=1");
    exit;
} else {
    echo "Error al guardar el producto: " . ($resultado['message'] ?? 'Error desconocido');
}
