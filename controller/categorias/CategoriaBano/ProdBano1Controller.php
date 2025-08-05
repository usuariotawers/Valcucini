<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaBano/prodbano1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodbano1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodbano1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodbano1Controller();
$controller->mostrarProducto();
