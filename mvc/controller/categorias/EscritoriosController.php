<?php
require_once(__DIR__ . '/../../model/categorias/EscritoriosModel.php');
require_once(__DIR__ . '/../../config/database.php');

class EscritorioController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new EscritorioModel($db->connect());
    }

    public function mostrarProductos() {
        $productosEscritorio = $this->modelo->obtenerProductosEscritorio();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosEscritorio[$i] ?? null;
        }
    }
}

$controller = new EscritorioController();
$controller->mostrarProductos();
