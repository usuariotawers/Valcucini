<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta3Controller();
$controller->mostrarProducto();
