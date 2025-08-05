<?php if (isset($producto)): ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="../public/images/<?= $producto['Url_imagenes'] ?>" class="img-fluid" alt="<?= htmlspecialchars($producto['Nombre']) ?>">
        </div>
        <div class="col-md-6">
            <h1><?= htmlspecialchars($producto['Nombre']) ?></h1>
            <p class="text-muted">Categoría: <?= htmlspecialchars($producto['Nombre_categoria']) ?></p>
            
            <h4>Descripción</h4>
            <p><?= nl2br(htmlspecialchars($producto['Descripcion'])) ?></p>
            
            <h4>Materiales</h4>
            <p><?= nl2br(htmlspecialchars($producto['Materiales'])) ?></p>
            
            <h4>Colores disponibles</h4>
            <p><?= nl2br(htmlspecialchars($producto['Colores'])) ?></p>
            
            <button class="btn btn-brown" data-bs-toggle="modal" data-bs-target="#cotizarModal">Cotizar este producto</button>
        </div>
    </div>
    
    <!-- Sección de reseñas -->
    <div class="mt-5">
        <h3>Reseñas de clientes</h3>
        <?php if (!empty($reseñas)): ?>
            <?php foreach ($reseñas as $reseña): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5><?= htmlspecialchars($reseña['Titulo_experiencia']) ?></h5>
                        <div class="stars mb-2">
                            <?= str_repeat('★', $reseña['Calificacion']) . str_repeat('☆', 5 - $reseña['Calificacion']) ?>
                        </div>
                        <p><?= htmlspecialchars($reseña['Opinion']) ?></p>
                        <p class="text-muted">Por <?= htmlspecialchars($reseña['usuario_nombre']) ?> el <?= $reseña['Fecha'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aún no hay reseñas para este producto.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Modal para cotización -->
<div class="modal fade" id="cotizarModal" tabindex="-1" aria-labelledby="cotizarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cotizarModalLabel">Cotizar <?= htmlspecialchars($producto['Nombre']) ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="procesar_cotizacion.php" method="POST">
                    <input type="hidden" name="id_producto" value="<?= $producto['id_productos'] ?>">
                    <!-- Campos del formulario de cotización -->
                </form>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container mt-5">
    <div class="alert alert-danger">Producto no encontrado</div>
    <a href="../index.php" class="btn btn-brown">Volver al inicio</a>
</div>
<?php endif; ?>