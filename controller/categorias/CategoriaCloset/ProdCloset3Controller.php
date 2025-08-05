<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset3Controller();
$controller->mostrarProducto();
