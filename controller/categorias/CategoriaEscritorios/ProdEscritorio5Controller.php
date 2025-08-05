<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEscritorios/ProdEscritorio5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEscritorio5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEscritorio5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEscritorio5Controller();
$controller->mostrarProducto();
