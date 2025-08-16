<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta4Controller();
$controller->mostrarProducto();
