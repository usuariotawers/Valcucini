<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina6Controller();
$controller->mostrarProducto();
