<?php
require_once(__DIR__ . '/../../../model/usuarios/categorias_usuarios/RecepcionModel.php');
require_once(__DIR__ . '../../../../config/database.php');

class RecepcionController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new RecepcionModel($db->connect());
    }

    public function mostrarProductos() {
        $productosRecepcion = $this->modelo->obtenerProductosRecepcion();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosRecepcion[$i] ?? null;
        }
    }
}

$controller = new RecepcionController();
$controller->mostrarProductos();
