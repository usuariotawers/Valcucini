<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEscritorios/ProdEscritorio3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEscritorio3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEscritorio3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEscritorio3Controller();
$controller->mostrarProducto();
