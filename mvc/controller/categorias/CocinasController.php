<?php
require_once(__DIR__ . '/../../model/categorias/CocinasModel.php');
require_once(__DIR__ . '/../../config/database.php');

class CocinaController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new CocinaModel($db->connect());
    }

    public function mostrarProductos() {
        $productosCocina = $this->modelo->obtenerProductosCocina();

        for ($i = 0; $i < 10; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosCocina[$i] ?? null;
        }
    }
}

$controller = new CocinaController();
$controller->mostrarProductos();
