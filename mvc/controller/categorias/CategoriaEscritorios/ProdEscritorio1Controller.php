<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEscritorios/ProdEscritorio1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEscritorio1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEscritorio1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEscritorio1Controller();
$controller->mostrarProducto();
