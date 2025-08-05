<?php
class ClienteModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerImagenesDescuentos() {
        $stmt = $this->conexion->prepare("SELECT * FROM carrusel WHERE tipo = 'Descuentos clientes'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }
 
    public function obtenerInspiracionPorCategoria($idCategoria) {
        $stmt = $this->conexion->prepare("
            SELECT Nombre, Url_imagenes 
            FROM productos 
            WHERE id_categoria = :id 
            LIMIT 3
        ");
        $stmt->bindParam(':id', $idCategoria, PDO::PARAM_INT);
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

    
}
?>