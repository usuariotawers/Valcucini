<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset2Controller();
$controller->mostrarProducto();
