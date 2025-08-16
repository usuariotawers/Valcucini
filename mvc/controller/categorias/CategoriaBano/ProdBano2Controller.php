<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaBano/prodbano2Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodbano2Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodbano2Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodbano2Controller();
$controller->mostrarProducto();
