<?php
function conectarBD() {
    $conexion = new mysqli("localhost", "root", "", "valcucini");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}

function guardarResena($nombre, $titulo_experiencia, $opinion, $calificacion, $id_usuario, $id_producto) {
    $conn = conectarBD();
    $stmt = $conn->prepare("INSERT INTO resenas (nombre, titulo_experiencia, opinion, calificacion, id_usuario, id_producto) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssiii", $nombre, $titulo_experiencia, $opinion, $calificacion, $id_usuario, $id_producto);
        $ok = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $ok;
    } else {
        echo " Error en prepare(): " . $conn->error;
        return false;
    }
}
?>
