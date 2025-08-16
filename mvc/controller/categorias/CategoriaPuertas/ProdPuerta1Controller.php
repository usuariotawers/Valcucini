<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta1Controller();
$controller->mostrarProducto();
