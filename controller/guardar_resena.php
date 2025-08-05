<?php
include '../model/resena_modelo.php';

// Solo si el formulario fue enviado por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 🔍 Ver qué datos llegaron
    echo "<h4 style='color:blue'>🧪 Datos recibidos del formulario:</h4>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Obtener los datos del formulario
    $nombre     = $_POST['nombre'] ?? '';
    $titulo_experiencia  = $_POST['titulo'] ?? '';
    $opinion             = $_POST['opinion'] ?? '';
    $calificacion        = $_POST['calificacion'] ?? 0;
    $id_usuario          = $_POST['id_usuario'] ?? 0;
    $id_producto         = $_POST['id_producto'] ?? 0;

    // Verificación de campos obligatorios
    if ($nombre && $titulo_experiencia && $opinion && $calificacion && $id_usuario && $id_producto) {

        $ok = guardarResena($nombre, $titulo_experiencia, $opinion, $calificacion, $id_usuario, $id_producto);

        if ($ok) {
            echo "<h4 style='color:green'>✅ ¡Reseña guardada exitosamente!</h4>";
             
             header("Location: ../view/cliente/productos_cliente/ProdCocina1.html?resena=ok");
             exit;
        } else {
            echo "<h4 style='color:red'>❌ Error al guardar la reseña en la base de datos.</h4>";
        }

    } else {
        echo "<h4 style='color:orange'>⚠️ Faltan datos obligatorios en el formulario.</h4>";
    }

} else {
    echo "<h4 style='color:red'>⛔ Acceso no autorizado.</h4>";
}
?>
