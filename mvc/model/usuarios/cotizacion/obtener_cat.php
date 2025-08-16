<?php
require_once(__DIR__ . '/../../../config/Database.php');


$db = new Database();
$conn = $db->connect();

$categorias = [];
try {
    $stmt = $conn->prepare("SELECT id_categoria, Nombre_categoria FROM categoria");
    $stmt->execute();
    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<option>Error: " . $e->getMessage() . "</option>";
}

$db->disconnect();
?>
