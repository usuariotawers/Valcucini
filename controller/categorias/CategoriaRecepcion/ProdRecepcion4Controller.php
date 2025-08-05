<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaRecepcion/ProdRecepcion4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdRecepcion4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdRecepcion4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdRecepcion4Controller();
$controller->mostrarProducto();
