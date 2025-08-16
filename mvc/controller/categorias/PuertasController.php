<?php
require_once(__DIR__ . '/../../model/categorias/PuertasModel.php');
require_once(__DIR__ . '/../../config/database.php');

class PuertasController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new PuertasModel($db->connect());
    }

    public function mostrarProductos() {
        $productosPuertas = $this->modelo->obtenerProductosPuertas();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosPuertas[$i] ?? null;
        }
    }
}

$controller = new PuertasController();
$controller->mostrarProductos();
