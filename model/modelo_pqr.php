<?php
// Función para conectar a la base de datos
function conectarBD() {
    $conexion = new mysqli("localhost", "root", "", "valcucini");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;
}

// Función para guardar la PQR
function guardarPQR($nombre, $apellido, $telefono, $mensaje, $confirmacion_envio) {
    $conn = conectarBD();

    $sql = "INSERT INTO formulario_pqr (nombre, apellido, telefono, mensaje, confirmacion_envio)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "Error al preparar la consulta: " . $conn->error;
        return false;
    }

    $stmt->bind_param("sssss", $nombre, $apellido, $telefono, $mensaje, $confirmacion_envio);

    $resultado = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $resultado;
}
?>
