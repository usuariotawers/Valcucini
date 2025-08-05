<?php
class MobiliarioModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProductosMobiliario() {
        $sql = "SELECT * FROM productos WHERE id_categoria = 8 LIMIT 3";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
