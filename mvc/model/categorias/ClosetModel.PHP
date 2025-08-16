<?php
require_once(__DIR__ . '../../../config/database.php');

class ClosetModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getProductosCloset() {
        $stmt = $this->conn->prepare("SELECT * FROM productos WHERE id_categoria = 2");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Destructor para cerrar conexión al final
    public function __destruct() {
        $this->conn = null;
    }
}
?>
