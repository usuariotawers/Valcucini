<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina9Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina9Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina9Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina9Controller();
$controller->mostrarProducto();
