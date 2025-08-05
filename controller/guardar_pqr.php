<?php
include __DIR__ . '/../model/modelo_pqr.php'; // Ruta segura al modelo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recolectar los datos del formulario
    $nombre        = $_POST['nombre']        ?? '';
    $apellido      = $_POST['apellido']      ?? '';
    $telefono      = $_POST['telefono']      ?? '';
    $mensaje       = $_POST['mensaje']       ?? '';
    $confirmacion  = $_POST['confirmacion']  ?? '';

    // 2. Validar que todos los campos estén presentes
    if ($nombre && $apellido && $telefono && $mensaje && $confirmacion) {
        // 3. Guardar usando el modelo
        if (guardarPQR($nombre, $apellido, $telefono, $mensaje, $confirmacion)) {
            echo "PQR enviado correctamente.";
        } else {
            echo "Error al guardar el PQR.";
        }
    } else {
        echo "Faltan datos obligatorios.";
    }
} else {
    //echo "Acceso no permitido.";
}
?>
