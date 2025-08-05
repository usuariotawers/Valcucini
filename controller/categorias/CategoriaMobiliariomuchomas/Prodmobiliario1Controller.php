<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaMobiliariomuchomas/Prodmobiliario1Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodmobiliario1Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodmobiliario1Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodmobiliario1Controller();
$controller->mostrarProducto();
