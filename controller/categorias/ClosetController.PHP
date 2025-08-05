<?php
require_once(__DIR__ . '/../../model/categorias/ClosetModel.php');

$model = new ClosetModel();
$productosCloset = $model->getProductosCloset();
?>
