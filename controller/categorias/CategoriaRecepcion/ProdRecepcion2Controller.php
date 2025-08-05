<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaRecepcion/ProdRecepcion2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdRecepcion2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdRecepcion2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdRecepcion2Controller();
$controller->mostrarProducto();
