<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEntretenimiento/ProdEntretenimiento6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEntretenimiento6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEntretenimiento6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEntretenimiento6Controller();
$controller->mostrarProducto();
