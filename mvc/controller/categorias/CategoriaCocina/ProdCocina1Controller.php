<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina1Controller();
$controller->mostrarProducto();
