<?php
class CategoriaModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // 🔹 Obtener todas las categorías con conteo de productos e imagen
    public function obtenerTodas() {
        $sql = "SELECT c.id_categoria, c.nombre_categoria, c.descripcion, c.url_imagen,
                       COUNT(p.id_productos) AS total_productos
                FROM categoria c
                LEFT JOIN productos p ON c.id_categoria = p.id_categoria
                GROUP BY c.id_categoria";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 🔹 Agregar una nueva categoría
    public function agregar($nombre, $descripcion) {
        $sql = "INSERT INTO categoria (nombre_categoria, descripcion) 
                VALUES (:nombre, :descripcion)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);

        return $stmt->execute();
    }

    // 🔹 Obtener nombre de la categoría por ID
    public function obtenerNombreCategoria($id) {
        $sql = "SELECT nombre_categoria FROM categoria WHERE id_categoria = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado ? $resultado['nombre_categoria'] : null;
    }

    public function eliminarPorId($id) {
    $sql = "DELETE FROM categoria WHERE id_categoria = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

    // 🔹 Actualizar imagen de una categoría
    public function actualizarImagen($id, $urlImagen) {
        $sql = "UPDATE categoria SET url_imagen = :url WHERE id_categoria = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':url', $urlImagen, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
