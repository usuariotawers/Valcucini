<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaRecepcion/ProdRecepcion3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdRecepcion3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdRecepcion3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdRecepcion3Controller();
$controller->mostrarProducto();
