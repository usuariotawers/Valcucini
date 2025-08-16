<?php
require_once(__DIR__ . '/../../../model/usuarios/categorias_usuarios/ClosetModel.PHP');
require_once(__DIR__ . '../../../../config/Database.php');

$model = new ClosetModel();
$productosCloset = $model->getProductosCloset();
?>
