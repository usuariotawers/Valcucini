<?php
class Conectar {
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = ""; 
    private $bd = "valcucini"; 
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bd);

        if ($this->conexion->connect_error) {
            die("Error al conectar con la base de datos: " . $this->conexion->connect_error);
        }

        $this->conexion->set_charset("utf8");
    }

    public function obtenerConexion() {
        return $this->conexion;
    }

    // 👇 Este es el nuevo método alternativo
    public function conexion() {
        return $this->conexion;
    }
}
?>
