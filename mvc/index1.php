<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/database.php';
require_once 'controller/CarruselController.php';

$action = $_GET['action'] ?? 'home';

try {
    switch ($action) {
        case 'home':
            $carruselController = new CarruselController();
            $carruselController->mostrarVistaCompleta();
            break;

        default:
            throw new Exception("Acción no válida: $action");
    }
} catch (Exception $e) {
    error_log("Error en index.php: " . $e->getMessage());
    http_response_code(404);
    include 'view/404.php'; // crea este archivo si no existe
}
?>
