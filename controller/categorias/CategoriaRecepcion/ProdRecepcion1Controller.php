<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaRecepcion/ProdRecepcion1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdRecepcion1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdRecepcion1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdRecepcion1Controller();
$controller->mostrarProducto();
