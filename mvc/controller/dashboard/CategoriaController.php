<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../model/dashboard/CategoriaModel.php');


class CategoriaController {
    private $model;

    public function __construct() {
        $db = new Database();
        $this->model = new CategoriaModel($db->connect());
    }

    public function obtenerCategorias() {
        return $this->model->obtenerTodas(); // Devuelve array de categorías
    }
}

?>