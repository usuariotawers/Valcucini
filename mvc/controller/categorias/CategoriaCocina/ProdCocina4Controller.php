<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina4Controller();
$controller->mostrarProducto();
