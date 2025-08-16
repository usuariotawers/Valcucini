<?php
class LoginModel {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    public function registrarUsuario($nombre, $apellido, $correo, $contrasena) {
        try {
            $hashed = $contrasena;;
            $sql = "INSERT INTO usuario (Nombre, Email, Contrasena, id_rol) VALUES (?, ?, ?, 2)";
            $stmt = $this->conexion->prepare($sql);
            return $stmt->execute([$nombre . ' ' . $apellido, $correo, $hashed]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function iniciarSesion($correo, $contrasena) {
        try {
            $sql = "SELECT * FROM usuario WHERE Email = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$correo]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario && password_verify($contrasena, $usuario['Contrasena'])) {
                return $usuario;
            }
            return false;
        } catch (PDOException $e) {
            return false;
        }
    }
}
