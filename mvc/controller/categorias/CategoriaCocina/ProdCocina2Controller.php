<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaCocina/ProdCocina2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class ProdCocina2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new ProdCocina2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new ProdCocina2Controller();
$controller->mostrarProducto();
