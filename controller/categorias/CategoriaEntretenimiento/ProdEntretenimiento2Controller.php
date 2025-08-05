<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEntretenimiento/ProdEntretenimiento2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEntretenimiento2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEntretenimiento2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEntretenimiento2Controller();
$controller->mostrarProducto();
