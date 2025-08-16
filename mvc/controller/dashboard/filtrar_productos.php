<?php
require_once("../../config/database.php");
require_once("../../model/dashboard/ProductoModel.php");
require_once("ProductoController.php");

header('Content-Type: application/json');

$controller = new ProductoController();

if (isset($_GET['id_categoria']) && $_GET['id_categoria'] !== '') {
    $idCategoria = intval($_GET['id_categoria']);
    $productos = $controller->filtrarPorCategoria($idCategoria);
} else {
    $productos = $controller->listarProductos(); // Todos los productos
}

echo json_encode($productos);
