<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos - Sistema de Inventario</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Material Design Iconic Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/dashboard/productos.css">
</head>
<body>
<?php
require_once(__DIR__ . '/../../controller/dashboard/ProductoController.php');
require_once(__DIR__ . '/../../controller/dashboard/CategoriaController.php');

// Productos
$productoController = new ProductoController();
$productos = $productoController->listarProductos();
$totalProductos = count($productos);

// Categorías
$categoriaController = new CategoriaController();
$categorias = $categoriaController->obtenerCategorias(); // ← Esto es necesario para poblar el <select>
?>


    <!-- Header Principal -->
    <header class="main-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-0">
                        <i class="zmdi zmdi-store me-3"></i>
                        Gestión de Productos
                    </h1>
                    <p class="mb-0 mt-2 opacity-75">Administra tu inventario de productos</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button type="button" class="btn btn-light btn-primary-custom" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        <i class="zmdi zmdi-plus me-2"></i>
                        Agregar Producto
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- =====================
         FILTROS Y BÚSQUEDA
    ====================== -->
    <div class="container">
        <div class="search-filters mb-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="searchProduct" class="form-label fw-semibold">
                        <i class="bi bi-search me-1"></i>
                        Buscar Producto
                    </label>
                    <input type="text" class="form-control" id="searchProduct" placeholder="Buscar por nombre">
                </div>
                <div class="col-md-5">
                    <label for="categoryFilter" class="form-label fw-semibold">
                        <i class="bi bi-filter me-1"></i>
                        Categoría
                    </label>
                    <select class="form-select" id="categoryFilter">
                        <option value="">Todas las categorías</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?= $cat['id_categoria'] ?>"><?= $cat['nombre_categoria'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- =====================
             TABLA DE PRODUCTOS
        ====================== -->
        <div class="card mb-4">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">
                            <i class="zmdi zmdi-view-list me-2"></i>
                            Lista de Productos
                        </h5>
                    </div>
                    <div class="col-auto">
                        <span class="badge bg-primary">Total: <span id="totalProducts"><?= $totalProductos ?></span></span>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="productsTable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 80px;">Imagen</th>
                                <th scope="col">Nombre del Producto</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Tipo</th>
                                <th scope="col" class="text-center">Visitas</th>
                                <th scope="col" class="text-center" style="width: 180px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="productsTableBody">
                            <?php if (isset($productos) && count($productos) > 0): ?>
                                <?php foreach ($productos as $producto): ?>
                                    <tr class="product-row"
                                        data-nombre="<?= htmlspecialchars($producto['nombre']) ?>"
                                        data-categoria="<?= htmlspecialchars($producto['id_categoria']) ?>"
                                        data-tipo="<?= htmlspecialchars(strtolower($producto['tipo'])) ?>">
                                        <td>
                                            <img src="/mvc/<?= htmlspecialchars($producto['url_imagenes']) ?>"
                                                 alt="<?= htmlspecialchars($producto['nombre']) ?>"
                                                 class="img-thumbnail" width="60">
                                        </td>
                                        <td class="fw-bold"><?= htmlspecialchars($producto['nombre']) ?></td>
                                        <td><?= htmlspecialchars($producto['nombre_categoria']) ?></td>
                                        <td><?= htmlspecialchars($producto['tipo']) ?></td>
                                        <td class="text-center"><?= $producto['visitas'] ?></td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary">Editar</a>
                                            <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No se encontraron productos.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Estado vacío (mostrar cuando no hay productos) -->
                <div class="empty-state d-none" id="emptyState">
                    <i class="zmdi zmdi-shopping-cart"></i>
                    <h5>No se encontraron productos</h5>
                    <p class="text-muted">No hay productos que coincidan con los criterios de búsqueda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================
     MODAL AGREGAR PRODUCTO
====================== -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">
                    <i class="zmdi zmdi-plus-circle me-2"></i>
                    Agregar Nuevo Producto
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <<form id="addProductForm" action="../../model/dashboard/add_product.php" method="POST" enctype="multipart/form-data">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="productName" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="productName" name="product_name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="productCategory" class="form-label">Categoría</label>
                            <select class="form-select" id="productCategory" name="product_category" required>
                                <option value="">Seleccionar categoría</option>
                                <?php foreach ($categorias as $cat): ?>
                                    <option value="<?= $cat['id_categoria'] ?>"><?= $cat['nombre_categoria'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                       <div class="col-md-6">
    <label for="productType" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="productType" name="product_type" placeholder="Ej: interior" required>
</div>

                        <div class="col-12">
                            <label for="productImage" class="form-label">Imagen del Producto</label>
                            <input type="file" class="form-control" id="productImage" name="product_image" accept="image/*">
                        </div>

                        <div class="col-12">
                            <label for="productDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="productDescription" name="product_description" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="addProductForm" class="btn btn-primary btn-primary-custom">
                    <i class="zmdi zmdi-check me-2"></i> Guardar Producto
                </button>
            </div>
        </div>
    </div>
</div>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Funciones para manejo de productos (conectar con PHP)
        function viewProduct(id) {
            // Redirigir a view_product.php?id=X o abrir modal
            window.location.href = `view_product.php?id=${id}`;
        }

        function editProduct(id) {
            // Redirigir a edit_product.php?id=X o cargar datos en modal
            window.location.href = `edit_product.php?id=${id}`;
        }

        function deleteProduct(id) {
            if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
                // Hacer petición AJAX o POST a delete_product.php
                fetch(`delete_product.php?id=${id}`, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then data => {
                    if (data.success) {
                        location.reload(); // Recargar la página
                    } else {
                        alert('Error al eliminar el producto');
                    }
                });
            }
        }

        // Filtros y búsqueda dinámica de productos
        const searchInput = document.getElementById('searchProduct');
        const categoryFilter = document.getElementById('categoryFilter');
        const typeFilter = document.getElementById('typeFilter');
        const tableBody = document.getElementById('productsTableBody');
        const emptyState = document.getElementById('emptyState');
        const totalProducts = document.getElementById('totalProducts');

        function filtrarProductos() {
            const search = searchInput.value.trim().toLowerCase();
            const categoria = categoryFilter.value;
            const tipo = typeFilter.value;
            let visibles = 0;

            const filas = tableBody.querySelectorAll('tr');
            filas.forEach(fila => {
                const nombre = (fila.dataset.nombre || '').toLowerCase();
                const cat = fila.dataset.categoria || '';
                const tip = fila.dataset.tipo || '';

                const coincideNombre = nombre.includes(search);
                const coincideCategoria = !categoria || cat === categoria;
                const coincideTipo = !tipo || tip === tipo;

                if (coincideNombre && coincideCategoria && coincideTipo) {
                    fila.style.display = '';
                    visibles++;
                } else {
                    fila.style.display = 'none';
                }
            });

            totalProducts.textContent = visibles;
            if (visibles === 0) {
                emptyState.classList.remove('d-none');
            } else {
                emptyState.classList.add('d-none');
            }
        }

        searchInput.addEventListener('input', filtrarProductos);
        categoryFilter.addEventListener('change', filtrarProductos);
        typeFilter.addEventListener('change', filtrarProductos);

        document.addEventListener('DOMContentLoaded', filtrarProductos);
    </script>
    <script>
document.getElementById('categoryFilter').addEventListener('change', function () {
    const idCategoria = this.value;
    let url = '';

    if (idCategoria === '') {
        // Traer todos los productos
        url = '../../controller/dashboard/filtrar_productos.php';
    } else {
        // Filtrar por categoría
        url = `../../controller/dashboard/filtrar_productos.php?id_categoria=${idCategoria}`;
    }

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('productsTableBody');
            tbody.innerHTML = '';

            if (data.length > 0) {
                data.forEach(producto => {
                    const row = `
                        <tr class="product-row" 
                            data-nombre="${producto.nombre.replace(/"/g, '&quot;')}" 
                            data-categoria="${producto.id_categoria}" 
                            data-tipo="${(producto.tipo || '').toLowerCase()}">
                            <td><img src="/mvc/${producto.url_imagenes}" class="img-thumbnail" style="width: 70px;"></td>
                            <td>${producto.nombre}</td>
                            <td>${producto.nombre_categoria}</td>
                            <td>${producto.tipo}</td>
                            <td class="text-center">${producto.visitas}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-warning">Editar</button>
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    `;
                    tbody.innerHTML += row;
                });
                document.getElementById('emptyState').classList.add('d-none');
            } else {
                document.getElementById('emptyState').classList.remove('d-none');
            }
            // Vuelve a aplicar el filtro de búsqueda y tipo si es necesario
            filtrarProductos();
        });
});

document.getElementById('searchProduct').addEventListener('input', function () {
    const search = this.value.trim().toLowerCase();
    const tbody = document.getElementById('productsTableBody');
    const rows = tbody.querySelectorAll('tr.product-row');
    let visibles = 0;

    rows.forEach(row => {
        const nombre = (row.dataset.nombre || '').toLowerCase();
        if (nombre.includes(search)) {
            row.style.display = '';
            visibles++;
        } else {
            row.style.display = 'none';
        }
    });

    document.getElementById('totalProducts').textContent = visibles;
    const emptyState = document.getElementById('emptyState');
    if (visibles === 0) {
        emptyState.classList.remove('d-none');
    } else {
        emptyState.classList.add('d-none');
    }
});

</script>

</body>
</html>