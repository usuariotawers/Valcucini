<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset6Controller();
$controller->mostrarProducto();
