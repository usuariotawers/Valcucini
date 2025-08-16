<?php
class ProductoModel {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    public function obtenerTodos() {
        $sql = "SELECT p.*, c.nombre_categoria 
                FROM productos p 
                JOIN categoria c ON p.id_categoria = c.id_categoria";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorCategoria($idCategoria) {
        $sql = "SELECT p.*, c.nombre_categoria 
                FROM productos p 
                JOIN categoria c ON p.id_categoria = c.id_categoria
                WHERE p.id_categoria = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idCategoria]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorTipo($tipo) {
        $sql = "SELECT p.*, c.nombre_categoria 
                FROM productos p 
                JOIN categoria c ON p.id_categoria = c.id_categoria
                WHERE p.tipo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$tipo]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorNombreOCodigo($termino) {
        $sql = "SELECT p.*, c.nombre_categoria 
                FROM productos p 
                JOIN categoria c ON p.id_categoria = c.id_categoria
                WHERE p.nombre LIKE ? OR p.id_productos = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["%$termino%", $termino]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
public function guardarProducto($nombre, $descripcion, $tipo, $url_imagenes, $id_categoria) {
    $sql = "INSERT INTO productos (nombre, descripcion, tipo, url_imagenes, id_categoria)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([$nombre, $descripcion, $tipo, $url_imagenes, $id_categoria]);
}



    public function filtrarAvanzado($idCategoria = null, $tipo = null, $termino = null) {
        $sql = "SELECT p.*, c.nombre_categoria 
                FROM productos p 
                JOIN categoria c ON p.id_categoria = c.id_categoria
                WHERE 1=1";

        $params = [];

        if ($idCategoria) {
            $sql .= " AND p.id_categoria = ?";
            $params[] = $idCategoria;
        }

        if ($tipo) {
            $sql .= " AND p.tipo = ?";
            $params[] = $tipo;
        }

        if ($termino) {
            $sql .= " AND (p.nombre LIKE ? OR p.id_productos = ?)";
            $params[] = "%$termino%";
            $params[] = $termino;
        }

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
