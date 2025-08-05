<?php
class CarruselModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerImagenesDescuentos() {
        $stmt = $this->conexion->prepare("SELECT * FROM carrusel WHERE tipo = 'Descuentos'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerImagenesPortafolio() {
        $stmt = $this->conexion->prepare("
            SELECT p.*, c.Nombre_categoria 
            FROM productos p
            INNER JOIN categoria c ON p.id_categoria = c.id_categoria
            INNER JOIN (
                SELECT id_categoria, MIN(id_productos) AS primer_producto
                FROM productos
                GROUP BY id_categoria
            ) AS primeros
            ON p.id_productos = primeros.primer_producto
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerMasVendidos() {
        $stmt = $this->conexion->prepare("
            SELECT p.*, c.Nombre_categoria 
            FROM productos p 
            INNER JOIN categoria c ON p.id_categoria = c.id_categoria
            ORDER BY p.visitas DESC 
            LIMIT 8
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerTestimonios() {
        $stmt = $this->conexion->prepare("SELECT * FROM resenas LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>