<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../model/CarruselModel.php';

$db = new Database();
$conn = $db->connect();

$modelo = new CarruselModel($conn);

$descuentos = $modelo->obtenerImagenesDescuentos();
$portafolio = $modelo->obtenerImagenesPortafolio();
$masVendidosOriginales = $modelo->obtenerMasVendidos();
$testimonios = $modelo->obtenerTestimonios();

// Procesar nombre de categoría limpio
$masVendidosProcesados = [];
foreach ($masVendidosOriginales as $producto) {
    $producto['Nombre_categoria_limpio'] = preg_replace('/[^a-zA-Z0-9]/', '', $producto['Nombre_categoria']);
    $masVendidosProcesados[] = $producto;
}

$nombreCategoria = $producto['Nombre_categoria']; // Ej: 'Closets'
$nombreCategoriaSingular = rtrim($nombreCategoria, 's'); // Resultado: 'Closet'
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valcucini</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/footerstyle.css">


</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand ps-4" href="#" >
                <img src="images/nav/LOGO.png" width="130px" alt="Valcucini" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index1.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categoria.php" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="categorias/cocinas.php">Cocinas</a></li>
                            <li><a class="dropdown-item" href="categorias/closet.php">Closets</a></li>
                            <li><a class="dropdown-item" href="categorias/escritorios.php">Escritorios</a></li>
                            <li><a class="dropdown-item" href="categorias/muebledebaño.php">Muebles De Baño</a></li>
                            <li><a class="dropdown-item" href="categorias/recepcion.php">Recepción</a></li>
                            <li><a class="dropdown-item" href="categorias/puertas.php">Puertas</a></li>
                            <li><a class="dropdown-item" href="categorias/entretenimiento.php">Centro De Entretenimiento</a></li>
                            <li><a class="dropdown-item" href="categorias/mobiliario.php">Mobiliario Y Mucho Más</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="formulario_pqr.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre_nosotros.php">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="trabajaconnosotros.php">Trabaja Con Nosotros</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-5" type="search" placeholder="Buscar...">
                </form>
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#RegistroModal">
                    <i class="bi bi-person-circle fa-2x"></i>
                </a> 
            </div>
        </div>
    </nav>

    <!-- Modal de Registro -->
    <div class="modal fade" id="RegistroModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="row g-0">
        <div class="col-md-6 d-flex flex-column justify-content-center p-4">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          <h2 class="fw-bold text-center text-success">Registrarse</h2>
          <p class="text-muted text-center">Por favor, ingresa tus datos</p>

          <form action="../model/usuarios/registro.php" method="POST">
            <div class="mb-3">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
                    
            <div class="mb-3">
              <input type="email" name="email" class="form-control" id="registroEmail" placeholder="Correo electrónico" required>
            </div>

            <div class="mb-3">
              <input type="password" name="contrasena" class="form-control" id="registroPassword" placeholder="Contraseña" required>
            </div>

            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="not-robot" required>
              <label class="form-check-label" for="not-robot">No soy un robot</label>
            </div>

            <button type="submit" class="btn btn-dark w-100">Registrarse</button>
          </form>

          <div class="text-center my-3">o</div>
        
          <p class="mt-3 text-muted text-center">
            ¿Ya tienes una cuenta?
            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#LoginModal">Iniciar sesión</a>
          </p>
        </div>
        <div class="col-md-6 modal-image">
          <img src="images/nav/img1mod.jpg" class="img-fluid imagen-modal" alt="Registro">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Inicio de Sesión -->
<div class="modal fade" id="LoginModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-center">
      <button type="button" class="btn-close m-2" data-bs-dismiss="modal"></button>
      <div class="row g-0">
        <div class="col-md-6 p-0 position-relative">
          <img src="images/nav/sesion2.jpg" class="img-fluid imagen-fondo" alt="Login">
          <div class="avatar-container">
            <img src="images/nav/LOGO.png" class="avatar" alt="Avatar">
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center p-4">
          <h2 class="fw-bold text-success">¡Bienvenido de nuevo!</h2>
          <p class="text-muted">Inicia sesión en tu cuenta</p>
          <form action="../model/usuarios/login.php" method="POST">
            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
              <input type="email" name="email" id="loginEmail" class="form-control" placeholder="Correo electrónico" required>
            </div>
            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="bi bi-lock"></i></span>
              <input type="password" name="contrasena" id="loginPassword" class="form-control" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Iniciar Sesión</button>
          </form>
          
          <div class="text-center my-3">o</div>
    
          <!--<p class="mt-3">
            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#ResetPasswordModal">Olvidé mi contraseña</a>
          </p>-->
          <p class="mt-3 text-muted">
            ¿No tienes una cuenta?
            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#RegistroModal">Regístrate</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Modal de Restablecimiento de Contraseña -->
    <div class="modal fade" id="ResetPasswordModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                <h2 class="fw-bold text-success">Recuperar Contraseña</h2>
                <form id="resetPasswordForm">
                    <div class="mb-3">
                        <input type="email" id="resetEmail" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Enviar Enlace</button>
                </form>
            </div>
        </div>
    </div>

<header class="hero-section">
    <div class="hero-content">
        <h1>Diseños que perduran</h1>
        <p>calidad que impacta</p>
        <a href="#portafolio" class="btn btn-brown m-4 p-2">comencemos</a>
    </div>
</header>

<!-- DESCUENTOS -->
<section id="portafolio" class="container mt-5">
    <h1 class="text-center">Descuentos</h1>
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($descuentos as $key => $descuento): ?>
                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                    <img src="/mvc/<?= htmlspecialchars($descuento['url_imagen']) ?>" class="carousel-image d-block w-100" alt="Imagen <?= $key + 1 ?>" data-bs-toggle="modal" data-bs-target="#modalLoginRequired">
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
</section>

<!-- MODAL -->
<div class="modal fade" id="modalLoginRequired" tabindex="-1" aria-labelledby="modalLoginRequiredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-attention">
        <div class="modal-content border border-warning shadow-lg">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalLoginRequiredLabel">Atención</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                Debes iniciar sesión para poder ver los nuestras promos de locura.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#RegistroModal">Iniciar Sesión</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- PORTAFOLIO -->
<section id="portafolio" class="container mt-5">
    <h2 class="text-center mb-4">Portafolio</h2>
    <div class="container my-4">
        <div class="p-3 border rounded shadow bg-brown">
            <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1500">
                <div class="carousel-inner">
                    <?php foreach ($portafolio as $key => $producto): ?>
                        <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                            <div class="carousel-content">
                                <img src="/mvc/<?= htmlspecialchars($producto['url_imagenes']) ?>" class="d-block w-100 img-fix" alt="<?= htmlspecialchars($producto['nombre']) ?>">
                                <div class="carousel-caption d-flex justify-content-center">
                                    <?php 
                                    $nombreCategoria = preg_replace('/[^a-zA-Z0-9]/', '', $producto['Nombre_categoria']);
                                    ?>
                                    <a href="/mvc/view/categoria/Categoria<?= htmlspecialchars($nombreCategoriaSingular) ?>/Prod<?= htmlspecialchars($nombreCategoriaSingular) ?><?= $producto['id_productos'] ?>.php" class="btn btn-brown">Ver</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIOS 
<section id="testimonios" class="container mt-5 my-4 text-center">
    <h2 class="mb-4">¿Qué opinan nuestros clientes?</h2>
    <div id="testimonioCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <?php foreach ($testimonios as $key => $testimonio): ?>
                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                    <blockquote class="blockquote">
                        <p class="text-muted">"<?= htmlspecialchars($testimonio['Opinion']) ?>"</p>
                        <div class="stars mb-2">
                            <?= str_repeat('★', $testimonio['Calificacion']) . str_repeat('☆', 5 - $testimonio['Calificacion']) ?>
                        </div>
                        <footer class="blockquote-footer"><?= htmlspecialchars($testimonio['Nombre']) ?></footer>
                    </blockquote>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonioCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonioCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
-->
<!-- MÁS VENDIDOS -->
<section id="best-sellers" class="container my-5">
    <h2 class="text-center">Más Vendidos</h2>
    <p class="text-center text-muted">Estos son los productos más vendidos en nuestra plataforma.</p>

    <div id="carouselvendidos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $chunks = array_chunk($masVendidosProcesados, 4);
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

 <footer>
        <div class="container text-center py-3">
            <h5 class=" mt-5 mb-3">COCINAS VALCUCINI</h5>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="sobre_nosotros.html" class="footer-link">ACERCA DE NOSOTROS</a></li>
                <li class="list-inline-item"><a href="categoria.html" class="footer-link">CATEGORÍAS</a></li>
                <li class="list-inline-item"><a href="index.html" class="footer-link">INFORMACIÓN</a><li></li>
                    
            </ul>
            <div class="my-3">
                <a href="https://www.facebook.com/share/19MJMzzzCd/" class="footer-link mx-2" ><i class="fab fa-facebook-f"></i></a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>