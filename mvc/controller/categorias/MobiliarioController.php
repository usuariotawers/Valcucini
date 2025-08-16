<?php
require_once(__DIR__ . '/../../model/categorias/MobiliarioModel.php');
require_once(__DIR__ . '/../../config/database.php');

class MobiliarioController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new MobiliarioModel($db->connect());
    }

    public function mostrarProductos() {
        $productosMobiliario = $this->modelo->obtenerProductosMobiliario();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosMobiliario[$i] ?? null;
        }
    }
}

$controller = new MobiliarioController();
$controller->mostrarProductos();
