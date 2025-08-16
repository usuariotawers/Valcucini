<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEntretenimiento/ProdEntretenimiento5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEntretenimiento5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEntretenimiento5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEntretenimiento5Controller();
$controller->mostrarProducto();
