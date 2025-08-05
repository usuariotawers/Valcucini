<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaMobiliariomuchomas/Prodmobiliario6Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodmobiliario6Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodmobiliario6Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodmobiliario6Controller();
$controller->mostrarProducto();
