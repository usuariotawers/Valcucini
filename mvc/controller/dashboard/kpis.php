<?php
require_once("../../config/database.php"); // Asegúrate de que la ruta es correcta

// Crear una instancia de la clase
$db = new Database();
$conn = $db->connect();

// KPI 1: Total productos
$sqlProductos = "SELECT COUNT(*) AS total FROM productos";
$stmt = $conn->prepare($sqlProductos);
$stmt->execute();
$totalProductos = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// KPI 2: Cotizaciones en espera
$sqlCotizaciones = "SELECT COUNT(*) AS total FROM formulario_de_cotizacion WHERE estado = 'espera'";
$stmt = $conn->prepare($sqlCotizaciones);
$stmt->execute();
$totalCotizaciones = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// KPI 3: Clientes registrados (rol = 2)
$sqlClientes = "SELECT COUNT(*) AS total FROM usuario WHERE id_rol = 2";
$stmt = $conn->prepare($sqlClientes);
$stmt->execute();
$totalClientes = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// Opcional: desconectar
$db->disconnect();
?>
