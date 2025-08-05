<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Categorías - Sistema de Inventario</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/dashboard/categorias.css">
    
</head>
<body>

<?php
require_once("../../controller/dashboard/CategoriaController.php");

$controller = new CategoriaController();
$categorias = $controller->obtenerCategorias(); // array de categorías
$totalCategorias = count($categorias);
?>





    <div class="container-fluid main-container">
        <!-- Encabezado de la página -->
        <div class="page-header text-center">
            <div class="container">
                <h1 class="page-title">
                    <i class="bi bi-tags-fill me-3"></i>
                    Categorías de Productos
                </h1>
                <p class="lead mb-0">Gestiona las categorías de tu inventario de forma eficiente</p>
            </div>
        </div>

        <div class="container">
            <!-- Buscador -->
            <div class="search-container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0" style="border-radius: 25px 0 0 25px; border: 2px solid #e9ecef; border-right: none;">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0 ps-0" placeholder="Buscar por nombre de categoría..." id="searchInput" style="border-radius: 0 25px 25px 0; border-left: none;">
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-0">
                        <button class="btn btn-primary mb-3 w-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
    <i class="bi bi-plus"></i> Nueva Categoría
</button>

                    </div>
                </div>
            </div>

            <!-- Tabla de categorías -->
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="mb-0">
                                <i class="bi bi-list-ul me-2"></i>
                                Lista de Categorías
                            </h4>
<div class="d-flex">
    <div class="col-auto ms-auto p-3">
        <span class="badge bg-primary">
            Total: <span id="totalCategories"><?= $totalCategorias ?></span>
        </span>
    </div>
</div>



                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="categoriesTable">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">ID</th>
                                    <th>Nombre</th>
                                    <th class="d-none d-md-table-cell">Descripción</th>
                                    <th style="width: 120px;" class="text-center">Productos</th>
                                    <th style="width: 150px;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
  <?php foreach($categorias as $fila) { ?>
    <tr>
        <td><strong>#<?php echo str_pad($fila['id_categoria'], 3, "0", STR_PAD_LEFT); ?></strong></td>
        <td>
            <div class="fw-bold"><?php echo htmlspecialchars($fila['nombre_categoria']); ?></div>
            <small class="text-muted d-md-none"><?php echo htmlspecialchars($fila['descripcion']); ?></small>
        </td>
        <td class="d-none d-md-table-cell">
            <span class="text-muted"><?php echo htmlspecialchars($fila['descripcion']); ?></span>
        </td>
        <td class="text-center">
            <span class="badge bg-info"><?php echo $fila['total_productos']; ?></span>
        </td>
        <td>
            <div class="action-buttons">
                <button type="button" class="btn btn-warning btn-sm" title="Editar">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" title="Eliminar" onclick="confirmDelete(<?php echo $fila['id_categoria']; ?>, '<?php echo addslashes($fila['nombre_categoria']); ?>')">
                    <i class="bi bi-trash3"></i>
                </button>
                <button type="button" class="btn btn-info btn-sm" title="Importar imagen"
                    onclick="abrirModalImagen(<?php echo $fila['id_categoria']; ?>)">
                    <i class="bi bi-image"></i>
                </button>
            </div>
        </td>
    </tr>
    <?php } ?>
</tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para agregar categoría -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 15px 15px 0 0;">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>
                        Agregar Nueva Categoría
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="addCategoryForm">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label fw-bold">
                                <i class="bi bi-tag me-1"></i>
                                Nombre de la Categoría *
                            </label>
                            <input type="text" class="form-control" id="categoryName" required placeholder="Ej: Electrónicos">
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label fw-bold">
                                <i class="bi bi-file-text me-1"></i>
                                Descripción
                            </label>
                            <textarea class="form-control" id="categoryDescription" rows="3" placeholder="Describe brevemente esta categoría..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-primary" onclick="addCategory()">
                        <i class="bi bi-check-circle me-1"></i>
                        Guardar Categoría
                    </button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal para actualizar imagen -->
<div class="modal fade" id="updateImageModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="updateImageForm" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Importar Imagen de Categoría</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_categoria" id="modalCategoriaId">
          <div class="mb-3">
            <label for="imagen" class="form-label">Seleccionar imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>

    <!-- Modal de confirmación para eliminar -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header bg-danger text-white" style="border-radius: 15px 15px 0 0;">
                    <h5 class="modal-title">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        Confirmar Eliminación
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <p class="mb-0">¿Estás seguro de que deseas eliminar la categoría <strong id="categoryToDelete"></strong>?</p>
                    <small class="text-muted">Esta acción no se puede deshacer.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">
                        <i class="bi bi-trash3 me-1"></i>
                        Eliminar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
       // Funcionalidad de búsqueda
document.getElementById('searchInput').addEventListener('keyup', function () {
    const searchValue = this.value.toLowerCase();
    const tableRows = document.querySelectorAll('#categoriesTable tbody tr');

    tableRows.forEach(row => {
        const categoryName = row.querySelector('td:nth-child(2) .fw-bold').textContent.toLowerCase();
        if (categoryName.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Función para confirmar eliminación
function confirmDelete(categoryId, categoryName) {
    document.getElementById('categoryToDelete').textContent = categoryName;
    document.getElementById('confirmDeleteBtn').onclick = function () {
        deleteCategory(categoryId);
    };

    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

// Función para eliminar categoría (conectar con PHP)
function deleteCategory(categoryId) {
    fetch('../../controller/dashboard/eliminar_categoria.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `id=${categoryId}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'ok') {
            const deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
            deleteModal.hide();

            alert('✅ Categoría eliminada correctamente');
            location.reload();
        } else {
            alert('❌ Error: ' + data.message);
        }
    })
    .catch(error => {
        console.error("Error de red:", error);
        alert('❌ Error al conectar con el servidor');
    });
}

// ✅ Función para agregar categoría
function addCategory() {
    const name = document.getElementById('categoryName').value.trim();
    const description = document.getElementById('categoryDescription').value.trim();

    if (!name) {
        alert('Por favor, ingresa un nombre para la categoría');
        return;
    }

    fetch('../../controller/dashboard/agregar_categoria.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `nombre=${encodeURIComponent(name)}&descripcion=${encodeURIComponent(description)}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "ok") {
                alert("✅ Categoría agregada correctamente");
                document.getElementById('addCategoryForm').reset();
                const modal = bootstrap.Modal.getInstance(document.getElementById('addCategoryModal'));
                modal.hide();
                location.reload();
            } else {
                alert("❌ Error al guardar: " + data.message);
            }
        })
        .catch(error => {
            console.error("Error de red:", error);
            alert("❌ Error al conectar con el servidor.");
        });
}

// ✅ Animación al cargar
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';

        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});

    </script>
    <script>
function abrirModalImagen(idCategoria) {
    document.getElementById('modalCategoriaId').value = idCategoria;
    const modal = new bootstrap.Modal(document.getElementById('updateImageModal'));
    modal.show();
}

document.getElementById('updateImageForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = document.getElementById('updateImageForm');
    const formData = new FormData(form);

    fetch('../../controller/dashboard/actualizar_imagen_categoria.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'ok') {
            alert('✅ Imagen actualizada correctamente');
            location.reload();
        } else {
            alert('❌ Error: ' + data.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert('❌ Error al conectar con el servidor');
    });
});
</script>
</body>
</html>