<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina10Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina10Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina10Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina10Controller();
$controller->mostrarProducto();
