<?php
require_once 'config/database.php';
require_once 'model/usuarios/categoria_cliente_model.php';

class CategoriaController {
    private $model;

    public function __construct() {
        $db = new Database();
        $this->model = new CategoriaModel($db->connect());
    }

    public function mostrarVistaCategorias() {
        $categorias = $this->model->obtenerTodas();
        $totalCategorias = count($categorias);
        require 'view/cliente/categoria_cliente.php';
    }
}
?>