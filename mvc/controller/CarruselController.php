<?php
require_once __DIR__ . '/../config/database.php';

require_once __DIR__ . '/../model/CarruselModel.php';


class CarruselController {
    private $modelo;

    public function __construct() {
        $db = new Database();
        $conexion = $db->connect();
        $this->modelo = new CarruselModel($conexion);
    }

    public function mostrarVistaCompleta() {
        $descuentos = $this->modelo->obtenerImagenesDescuentos();
        $portafolio = $this->modelo->obtenerImagenesPortafolio();
        $masVendidos = $this->modelo->obtenerMasVendidos();
        $testimonios = $this->modelo->obtenerTestimonios();

        // Limpiar nombres de categorías para URL
        $masVendidosProcesados = [];
        foreach ($masVendidos as $producto) {
            $nombreCategoriaLimpio = preg_replace('/[^a-zA-Z0-9]/', '', $producto['Nombre_categoria']);
            $producto['Nombre_categoria_limpio'] = $nombreCategoriaLimpio;
            $masVendidosProcesados[] = $producto;
        }

        require 'view/index.php';
    }
}
?>
