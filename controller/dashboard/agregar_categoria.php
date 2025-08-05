<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../model/dashboard/CategoriaModel.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';

    if (empty($nombre)) {
        echo json_encode(["status" => "error", "message" => "Nombre obligatorio"]);
        exit;
    }

    try {
        $db = new Database();
        $conn = $db->connect();
        $model = new CategoriaModel($conn);
        $model->agregar($nombre, $descripcion);

        echo json_encode(["status" => "ok"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Método no permitido"]);
}
