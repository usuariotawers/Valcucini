<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaPuertas/ProdPuerta5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdPuerta5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdPuerta5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdPuerta5Controller();
$controller->mostrarProducto();
