<?php
require_once '../config/database.php';
require_once '../model/ClienteModel.php';

class ClienteController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $conexion = $db->connect();
        $this->modelo = new ClienteModel($conexion);
    }

    public function mostrarVistaCompleta() {
    $descuentos = $this->modelo->obtenerImagenesDescuentos();
    $masVendidos = $this->modelo->obtenerMasVendidos();

    $categoriasInspiracion = [
        'cocinas' => $this->modelo->obtenerInspiracionPorCategoria(3),
        'banos' => $this->modelo->obtenerInspiracionPorCategoria(4),
        'entretenimiento' => $this->modelo->obtenerInspiracionPorCategoria(5),
        'puertas' => $this->modelo->obtenerInspiracionPorCategoria(6),
        'closets' => $this->modelo->obtenerInspiracionPorCategoria(2),
        'escritorios' => $this->modelo->obtenerInspiracionPorCategoria(7),
        'recepcion' => $this->modelo->obtenerInspiracionPorCategoria(8),
        'mucho' => $this->modelo->obtenerInspiracionPorCategoria(9)
    ];


   // Limpieza de nombres
    $masVendidosProcesados = [];
    foreach ($masVendidos as $producto) {
        $nombreCategoriaLimpio = preg_replace('/[^a-zA-Z0-9]/', '', $producto['Nombre_categoria']);
        $producto['Nombre_categoria_limpio'] = $nombreCategoriaLimpio;
        $masVendidosProcesados[] = $producto;
    }


    return [
        'descuentos' => $descuentos,
        'masVendidos' => $masVendidosProcesados,
        'inspiracion' => $categoriasInspiracion
    ];



   
}

}
?>