<?php
class ProdEntretenimiento2Model {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProducto() {
        $sql = "SELECT * FROM productos WHERE id_productos = 21 AND id_categoria = 7 LIMIT 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
