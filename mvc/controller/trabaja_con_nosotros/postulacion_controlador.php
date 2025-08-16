<?php
session_start(); // <-- importante

require_once(__DIR__ . '/../../config/Conectar.php');
require_once(__DIR__ . '/../../model/trabaja_con_nosotros/Postulacion_modelo.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conexionDB = new Conectar();
    $conexion = $conexionDB->obtenerConexion();

    // Validar sesión
    $id_usuario = $_SESSION['id_usuario'] ?? null;
    if ($id_usuario === null) {
        die("Error: sesión no iniciada o id_usuario no definido.");
    }

    // Recolectar datos del formulario
    $nombre_postulante = $_POST['nombre_postulante'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $email = $_POST['email'] ?? '';
    $cargo = $_POST['cargo'] ?? '';
    $ciudad = $_POST['ciudad'] ?? '';
    $experiencia = $_POST['experiencia'] ?? '';
    $herramientas = isset($_POST['herramientas']) ? 1 : 0;
    $transporte = isset($_POST['transporte']) ? 1 : 0;

    // Procesar archivo
    $archivo = '';
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {
        $directorio = __DIR__ . '/../../uploads/';
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }

        $archivo_nombre = uniqid() . '_' . basename($_FILES['archivo']['name']);
        $archivo_ruta = $directorio . $archivo_nombre;

        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_ruta)) {
            $archivo = 'uploads/' . $archivo_nombre;
        }
    }

    // Guardar en BD
    $modelo = new PostulacionModelo($conexion);
    $datos = compact(
        'nombre_postulante', 'telefono', 'email', 'cargo', 'ciudad',
        'experiencia', 'archivo', 'id_usuario', 'herramientas', 'transporte'
    );

    if ($modelo->guardarPostulacion($datos)) {
        header("Location: ../../view/cliente/trabajaconnosotrosusuario.php?success=1");
    } else {
        header("Location: ../../view/cliente/trabajaconnosotrosusuario.php?error=1");
    }

    exit();
}
?>
