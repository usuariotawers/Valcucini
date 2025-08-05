<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEntretenimiento/ProdEntretenimiento4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEntretenimiento4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEntretenimiento4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEntretenimiento4Controller();
$controller->mostrarProducto();
