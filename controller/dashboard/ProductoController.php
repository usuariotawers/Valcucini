<?php
require_once(__DIR__ . '/../../config/database.php');
require_once(__DIR__ . '/../../model/dashboard/ProductoModel.php');

class ProductoController {
    private $model;

    public function __construct() {
        $db = new Database();
        $this->model = new ProductoModel($db->connect());
    }

    public function listarProductos() {
        return $this->model->obtenerTodos();
    }

    public function filtrarPorCategoria($idCategoria) {
        return $this->model->obtenerPorCategoria($idCategoria);
    }

    public function filtrarPorTipo($tipo) {
        return $this->model->obtenerPorTipo($tipo);
    }

    public function buscarPorNombreOCodigo($termino) {
        return $this->model->buscarPorNombreOCodigo($termino);
    }

    public function filtrarAvanzado($idCategoria = null, $tipo = null, $termino = null) {
        return $this->model->filtrarAvanzado($idCategoria, $tipo, $termino);
    }

    // ✅ Método para guardar producto con manejo de errores
    public function guardarProducto($nombre, $descripcion, $tipo, $imagen, $id_categoria) {
        try {
            // Validaciones mínimas (puedes mejorar esto más adelante)
            if (empty($nombre) || empty($tipo) || empty($id_categoria)) {
                return [
                    'success' => false,
                    'message' => 'Nombre, tipo y categoría son campos obligatorios.'
                ];
            }

            $resultado = $this->model->guardarProducto($nombre, $descripcion, $tipo, $imagen, $id_categoria);

            if ($resultado) {
                return [
                    'success' => true,
                    'message' => 'Producto guardado correctamente.'
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'No se pudo guardar el producto. Intenta nuevamente.'
                ];
            }
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Error al guardar el producto: ' . $e->getMessage()
            ];
        }
    }
}
