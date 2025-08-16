<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina7Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina7Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina7Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina7Controller();
$controller->mostrarProducto();
