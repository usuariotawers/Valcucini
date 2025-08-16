<?php
require_once(__DIR__ . '/../../../model/usuarios/categorias_usuarios/EntretenimientoModel.php');
require_once(__DIR__ . '../../../../config/database.php');

class EntretenimientoController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new EntretenimientoModel($db->connect());
    }

    public function mostrarProductos() {
        $productosEntretenimiento = $this->modelo->obtenerProductosEntretenimiento();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosEntretenimiento[$i] ?? null;
        }
    }
}

$controller = new EntretenimientoController();
$controller->mostrarProductos();
