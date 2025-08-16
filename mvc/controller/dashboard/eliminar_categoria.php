<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../model/dashboard/CategoriaModel.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if (!$id || !is_numeric($id)) {
        echo json_encode(['status' => 'error', 'message' => 'ID inválido']);
        exit;
    }

    $db = new Database();
    $conn = $db->connect();
    $model = new CategoriaModel($conn);

    $eliminado = $model->eliminarPorId($id);

    if ($eliminado) {
        echo json_encode(['status' => 'ok']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se pudo eliminar la categoría']);
    }
}
