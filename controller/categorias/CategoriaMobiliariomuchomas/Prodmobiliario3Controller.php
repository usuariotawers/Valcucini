<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaMobiliariomuchomas/Prodmobiliario3Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodmobiliario3Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodmobiliario3Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodmobiliario3Controller();
$controller->mostrarProducto();
