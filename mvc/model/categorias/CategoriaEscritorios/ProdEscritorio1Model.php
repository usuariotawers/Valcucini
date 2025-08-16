<?php
class ProdEscritorio1Model {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerProducto() {
        $sql = "SELECT * FROM productos WHERE id_productos = 26 AND id_categoria = 3 LIMIT 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
