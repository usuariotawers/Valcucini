<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEntretenimiento/ProdEntretenimiento3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEntretenimiento3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEntretenimiento3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEntretenimiento3Controller();
$controller->mostrarProducto();
