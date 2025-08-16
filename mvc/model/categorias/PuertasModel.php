<?php
class PuertasModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProductosPuertas() {
        // Asegúrate que este ID corresponda a "Entretenimiento" en tu base de datos
        $sql = "SELECT * FROM productos WHERE id_categoria = 6 LIMIT 6";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
