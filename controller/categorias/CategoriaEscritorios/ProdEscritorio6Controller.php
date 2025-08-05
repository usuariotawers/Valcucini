<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaEscritorios/ProdEscritorio6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdEscritorio6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdEscritorio6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdEscritorio6Controller();
$controller->mostrarProducto();
