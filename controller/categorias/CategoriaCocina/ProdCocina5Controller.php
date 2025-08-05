<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina5Controller();
$controller->mostrarProducto();
