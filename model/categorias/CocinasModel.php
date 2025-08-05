<?php
class CocinaModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProductosCocina() {
        $sql = "SELECT * FROM productos WHERE id_categoria = 1 LIMIT 10";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
