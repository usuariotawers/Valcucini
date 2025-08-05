<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEscritorios/ProdEscritorio4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEscritorio4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEscritorio4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEscritorio4Controller();
$controller->mostrarProducto();
