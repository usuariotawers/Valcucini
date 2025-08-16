<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaBano/prodbano3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodbano3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodbano3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodbano3Controller();
$controller->mostrarProducto();
