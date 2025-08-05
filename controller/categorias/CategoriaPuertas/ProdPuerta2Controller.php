<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta2Controller();
$controller->mostrarProducto();
