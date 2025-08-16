<?php
class FormularioPqrModel {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    public function guardarMensaje($nombre, $correo, $telefono, $mensaje, $id_usuario) {
        $sql = "INSERT INTO formulario_PQR 
                (Nombre, correo, Telefono, Mensaje, confirmación_envio, id_usuario)
                VALUES (:nombre, :correo, :telefono, :mensaje, 1, :id_usuario)";
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->bindParam(':id_usuario', $id_usuario);
        return $stmt->execute();
    }
}
