<?php
class PostulacionModelo {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function guardarPostulacion($datos) {
        $sql = "INSERT INTO trabaja_con_nosotros 
                (nombre, telefono, email, cargo, ciudad, experiencia, portafolio, id_usuario, herramientas, transporte)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexion->prepare($sql);

        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $this->conexion->error);
        }

        $stmt->bind_param(
            "sssssssiii",
            $datos['nombre_postulante'],
            $datos['telefono'],
            $datos['email'],
            $datos['cargo'],
            $datos['ciudad'],
            $datos['experiencia'],
            $datos['archivo'],
            $datos['id_usuario'],
            $datos['herramientas'],
            $datos['transporte']
        );

        return $stmt->execute();
    }
    
}


