<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina8Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina8Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina8Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina8Controller();
$controller->mostrarProducto();
