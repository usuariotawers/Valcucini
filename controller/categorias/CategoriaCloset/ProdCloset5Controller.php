<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCloset/ProdCloset5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCloset5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCloset5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCloset5Controller();
$controller->mostrarProducto();
