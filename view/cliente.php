<?php
require_once(__DIR__ . '/../controller/ClienteController.php');

$controller = new ClienteController();
$data = $controller->mostrarVistaCompleta();

$descuentos = $data['descuentos'];
$masVendidos = $data['masVendidos'];
$inspiracion = $data['inspiracion']; // ✅ Esta línea es necesaria

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valcucini</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/nav-usuario-style.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <link rel="stylesheet" href="css/cliente.css">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand ps-4" href="#">
                <img src="images/nav/LOGO.png" width="130px" alt="Valcucini" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="cliente.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="cliente/categoria_cliente.html" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/cocinas.html">Cocinas</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/closet.html">Closets</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/escritorios.html">Escritorios</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/muebledebaño.html">Muebles De Baño</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/recepcion.html">Recepción</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/puertas.html">Puertas</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/entretinimiento.html">Centro De Entretenimiento</a></li>
                            <li><a class="dropdown-item" href="usuarios/categorias-usuario/mobiliario.html">Mobiliario Y Mucho Más</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="formulario_pqr.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="usuarios/sobre_nosotros -usuario.html">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="cliente/trabajaconnosotrosusuario.php">Trabaja Con Nosotros</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-5" type="search" placeholder="Buscar...">
                </form>
                <div class="dropdown user-dropdown">
                    <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-3"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="mi-cuenta.html">MI CUENTA</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item logout" href="../index.php">SALIR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección de descuentos --> 
<!-- Sección de descuentos -->
<section id="descuentos" class="container mt-5">
    <h1 class="text-center">Descuentos</h1>

    <?php if (!empty($descuentos)): ?>
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($descuentos as $index => $descuento): ?>
                    <?php $rutaImagen = '/mvc/' . $descuento['url_imagen']; ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <a href="formulariopersonalizado.php">
                            <img src="<?= $rutaImagen ?>" class="carousel-image d-block w-100" alt="Descuento <?= $index + 1 ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    <?php else: ?>
        <p class="text-center text-muted">No hay descuentos disponibles.</p>
    <?php endif; ?>
</section>

    
   
    
<!-- Sección de Inspiración -->
<section class="container my-5">
    <h2 class="text-center mb-4">Inspiración para cada espacio de tu hogar</h2>

   <!-- Botones --> 
    <div class="d-flex flex-wrap justify-content-center mb-5 filter-buttons">
        <button class="btn btn-filter active me-2" data-bs-target="#cocinas">
            <i class="fas fa-utensils"></i> Cocinas
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#banos">
            <i class="fas fa-bath"></i> Baños
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#entretenimiento">
            <i class="fas fa-tv"></i> Entretenimiento
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#puertas">
            <i class="fas fa-door-open"></i> Puertas
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#closets">
            <i class="fas fa-tshirt"></i> Closets
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#escritorios">
            <i class="fas fa-laptop"></i> Escritorios
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#recepcion">
            <i class="fas fa-building"></i> Recepción
        </button>
        <button class="btn btn-filter me-2" data-bs-target="#mucho">
            <i class="fas fa-ellipsis-h"></i> Mucho más
        </button>
    </div>


    <div id="contenedor-secciones">
        <!-- Cocinas -->
        <section id="cocinas" class="collapse show gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['cocinas'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Baños -->
        <section id="banos" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['banos'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Entretenimiento -->
        <section id="entretenimiento" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['entretenimiento'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Puertas -->
        <section id="puertas" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['puertas'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Closets -->
        <section id="closets" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['closets'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Escritorios -->
        <section id="escritorios" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['escritorios'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Recepción -->
        <section id="recepcion" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['recepcion'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Mucho más -->
        <section id="mucho" class="collapse gallery-section" data-bs-parent="#contenedor-secciones">
            <div class="row g-4">
                <?php foreach ($inspiracion['mucho'] as $i => $p): ?>
                    <?php $src = '/mvc/' . ltrim($p['Url_imagenes'], '/'); ?>
                    <div class="col-lg-<?= $i === 0 ? '8' : '4' ?>">
                        <div class="<?= $i === 0 ? 'gallery-main-img' : 'gallery-secondary-img' ?>">
                            <img src="<?= htmlspecialchars($src) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($p['Nombre']) ?>">
                            <div class="img-overlay">
                                <?= $i === 0 
                                      ? "<h3>" . htmlspecialchars($p['Nombre']) . "</h3><p>Inspiración</p>" 
                                      : "<p>" . htmlspecialchars($p['Nombre']) . "</p>" 
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</section>

<!-- Script acordeón de secciones -->
<script>
    const buttons = document.querySelectorAll('.btn-filter');
    const sections = document.querySelectorAll('.gallery-section');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Botones
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Secciones
            const target = btn.getAttribute('data-bs-target') || '#' + btn.textContent.trim().toLowerCase();
            sections.forEach(sec => {
                sec.id === target.replace('#','')
                    ? sec.classList.add('show')
                    : sec.classList.remove('show');
            });
        });
    });
</script>

<!-- MÁS VENDIDOS -->
<section id="best-sellers" class="container my-5">
    <h2 class="text-center">Más Vendidos</h2>
    <p class="text-center text-muted">Estos son los productos más vendidos en nuestra plataforma.</p>

    <div id="carouselvendidos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
$chunks = array_chunk($masVendidos, 4);
            foreach ($chunks as $key => $chunk): 
            ?>
                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                    <div class="row justify-content-center">
                        <?php foreach ($chunk as $producto): ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-3">
                                <div class="product card h-100">
                                    <a href="categorias/<?= htmlspecialchars($producto['Nombre_categoria_limpio']) ?>/Prod<?= htmlspecialchars($producto['Nombre_categoria_limpio']) ?><?= $producto['id_productos'] ?>.html">
                                        <img src="/mvc/<?= htmlspecialchars($producto['url_imagenes']) ?>" class="card-img-top" alt="<?= htmlspecialchars($producto['nombre']) ?>">
                                    </a>
                                    <div class="card-body p-2 text-center">
                                        <p class="card-title mb-0"><?= htmlspecialchars($producto['nombre']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselvendidos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselvendidos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
          
    
    <!-- Pie de página -->
    <footer>
        <div class="container text-center py-3">
            <h5 class="mt-5 mb-3">COCINAS VALCUCINI</h5>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="sobre_nosotros.html" class="footer-link">ACERCA DE NOSOTROS</a></li>
                <li class="list-inline-item"><a href="categoria.html" class="footer-link">CATEGORÍAS</a></li>
                <li class="list-inline-item"><a href="index.html" class="footer-link">INFORMACIÓN</a><li>
            </ul>
            <div class="my-3">
                <a href="https://www.facebook.com/share/19MJMzzzCd/" class="footer-link mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/valcucini_cocinas?igsh=MWtqa241NDF6cWt0dg==" class="footer-link mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link mx-2"><i class="fab fa-twitter"></i></a>
                <a href="https://wa.me/3124339001" class="footer-link mx-2"><i class="fab fa-whatsapp"></i></a>
            </div>
            <p class="small">
                <strong>TÉRMINOS Y CONDICIONES</strong> | LÍNEA NACIONAL: 01 8000 230854 - BOGOTÁ: PBX 388 43 90 - HORARIO DE ATENCIÓN: LUN-SAB 7:00 A.M A 7:00 PM
                <br>
                NOTIFICACIONES: CARRERA 49 # 141 - 27, BOGOTÁ, COLOMBIA
                <br>
                <a href="mailto:contactenos@cocinasvalcucini.com" class="footer-link">CONTACTENOS@COCINASVALCUCINI.COM</a> | RAZÓN SOCIAL: COCINAS VALCUCINI S.A.S. | NIT: 7.168.725-1
                <br>© 2025 TODOS LOS DERECHOS RESERVADOS
                <br>
                <a href="#" class="footer-link">SUPERINTENDENCIA DE INDUSTRIA Y COMERCIO</a>
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>