<?php
require_once(__DIR__ . '/../../../model/usuarios/categorias_usuarios/MuebledebanoModel.php');
require_once(__DIR__ . '../../../../config/database.php');

class MuebledebañoController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $this->modelo = new MuebledebañoModel($db->connect());
    }

    public function mostrarProductos() {
        $productosMuebledebaño = $this->modelo->obtenerProductosMuebledebaño();

        for ($i = 0; $i < 6; $i++) {
            $varName = "producto" . ($i + 1);
            $GLOBALS[$varName] = $productosMuebledebaño[$i] ?? null;
        }
    }
}

$controller = new MuebledebañoController();
$controller->mostrarProductos();
