<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina3Controller();
$controller->mostrarProducto();
