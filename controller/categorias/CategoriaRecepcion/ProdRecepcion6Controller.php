<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaRecepcion/ProdRecepcion6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdRecepcion6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdRecepcion6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdRecepcion6Controller();
$controller->mostrarProducto();
