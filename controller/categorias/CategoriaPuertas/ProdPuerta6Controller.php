<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta6Controller();
$controller->mostrarProducto();
