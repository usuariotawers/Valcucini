<?php
class CategoriaModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodas() {
        $query = "SELECT 
                    id_categoria, 
                    Nombre_categoria AS nombre, 
                    Url_imagen, 
                    Descripcion 
                  FROM categoria";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Destructor para cerrar la conexión automáticamente
    public function __destruct() {
        $this->conn = null;
    }
}
?>
