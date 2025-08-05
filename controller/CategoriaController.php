<?php
require_once 'config/database.php';
require_once 'model/CategoriaModel.php';

class CategoriaController {
    private $model;

    public function __construct() {
        $db = new Database();
        $this->model = new CategoriaModel($db->connect());
    }

    public function mostrarVistaCategorias() {
        $categorias = $this->model->obtenerTodas();
        $totalCategorias = count($resultado);
        require 'view/categorias/categorias.php';
    }
}

?>
