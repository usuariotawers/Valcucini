<?php
include('../modelo/conexion.php'); // Ajusta la ruta si es diferente

if (isset($_GET['id'])) {
    $idProducto = intval($_GET['id']);  // Sanitizar entrada
    $fechaVisita = date('Y-m-d');

    // Insertar registro en la tabla de visitas
    $stmt = $conn->prepare("INSERT INTO registro_visitas (id_producto, fecha_visita) VALUES (?, ?)");
    $stmt->bind_param("is", $idProducto, $fechaVisita);
    $stmt->execute();
    $stmt->close();

    // (opcional) También podrías actualizar la columna visitas en productos
    $conn->query("UPDATE productos SET visitas = visitas + 1 WHERE id_productos = $idProducto");
}
?>
