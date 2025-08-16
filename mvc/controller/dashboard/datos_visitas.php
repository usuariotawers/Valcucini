<?php
// controlador/datos_visitas.php
header('Content-Type: application/json');
include("../modelo/conexion.php");

$sql = "SELECT fecha, COUNT(*) as total FROM registro_visitas 
        GROUP BY fecha ORDER BY fecha DESC LIMIT 7";

$resultado = $conn->query($sql);

$fechas = [];
$totales = [];

while ($fila = $resultado->fetch_assoc()) {
    $fechas[] = $fila['fecha'];
    $totales[] = (int)$fila['total'];
}

$fechas = array_reverse($fechas);
$totales = array_reverse($totales);

echo json_encode([
    'labels' => $fechas,
    'data' => $totales
]);
?>