<?php
class MuebledebañoModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProductosMuebledebaño() {
        $sql = "SELECT * FROM productos WHERE id_categoria = 4 LIMIT 6";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
