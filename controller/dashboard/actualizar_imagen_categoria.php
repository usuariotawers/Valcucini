<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../model/dashboard/CategoriaModel.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_categoria'] ?? null;
    $imagen = $_FILES['imagen'] ?? null;

    if (!$id || !$imagen || $imagen['error'] !== 0) {
        echo json_encode(["status" => "error", "message" => "Datos inválidos o imagen no enviada"]);
        exit;
    }

    // 🔍 Buscar nombre de la categoría
    $db = new Database();
    $conn = $db->connect();
    $modelo = new CategoriaModel($conn);
    $nombreCategoria = $modelo->obtenerNombreCategoria($id);

    if (!$nombreCategoria) {
        echo json_encode(["status" => "error", "message" => "Categoría no encontrada"]);
        exit;
    }

    // 🗂️ Crear carpeta de destino si no existe
    $nombreCarpeta = 'Categoria' . preg_replace('/\s+/', '', $nombreCategoria);
    $rutaCarpeta = __DIR__ . "/../../view/images/$nombreCarpeta";

    if (!is_dir($rutaCarpeta)) {
        mkdir($rutaCarpeta, 0777, true);
    }

    // 🧾 Preparar nombre del archivo y rutas
    $ext = pathinfo($imagen['name'], PATHINFO_EXTENSION);
    $nombreArchivo = 'categoria_' . $id . '_' . time() . '.' . $ext;

    $rutaFisica = "$rutaCarpeta/$nombreArchivo";  // Para guardar
    $rutaRelativa = "view/images/$nombreCarpeta/$nombreArchivo"; // Para navegador y BD

    if (move_uploaded_file($imagen['tmp_name'], $rutaFisica)) {
        $modelo->actualizarImagen($id, $rutaRelativa);
        echo json_encode(["status" => "ok", "ruta" => $rutaRelativa]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error al mover imagen"]);
    }
}
