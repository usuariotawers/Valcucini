<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset4Controller();
$controller->mostrarProducto();
