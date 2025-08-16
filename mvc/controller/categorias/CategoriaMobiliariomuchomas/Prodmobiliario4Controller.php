<?php
require_once(__DIR__ . '/../../../model/categorias/CategoriaMobiliariomuchomas/Prodmobiliario4Model.php');
require_once(__DIR__ . '/../../../config/database.php');

class Prodmobiliario4Controller {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new Prodmobiliario4Model($db->connect());
    }

    public function mostrarProducto() {
        $GLOBALS['producto'] = $this->modelo->obtenerProducto();
    }
}

$controller = new Prodmobiliario4Controller();
$controller->mostrarProducto();
