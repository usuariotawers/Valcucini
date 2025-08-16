<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaMobiliariomuchomas/Prodmobiliario5Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodmobiliario5Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodmobiliario5Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodmobiliario5Controller();
$controller->mostrarProducto();
