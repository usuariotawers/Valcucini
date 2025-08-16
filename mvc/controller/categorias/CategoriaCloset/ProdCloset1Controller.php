<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset1Controller();
$controller->mostrarProducto();
