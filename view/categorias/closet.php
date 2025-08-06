<?php require_once(__DIR__ . '/../../controller/categorias/ClosetController.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../view/css/navstyle.css">
    <link rel="stylesheet" href="../../view/css/footerstyle.css">
    <link rel="stylesheet" href="../../view/css/CategoriaIndivi.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand ps-4" href="#" >
                <img src="../images/nav/LOGO.png" width="130px" alt="Valcucini" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="../index1.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../categoria.php" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cocinas.php">Cocinas</a></li>
                            <li><a class="dropdown-item" href="closet.php">Closets</a></li>
                            <li><a class="dropdown-item" href="escritorios.php">Escritorios</a></li>
                            <li><a class="dropdown-item" href="muebledebaño.php">Muebles De Baño</a></li>
                            <li><a class="dropdown-item" href="recepcion.php">Recepción</a></li>
                            <li><a class="dropdown-item" href="puertas.php">Puertas</a></li>
                            <li><a class="dropdown-item" href="entretenimiento.php">Centro De Entretenimiento</a></li>
                            <li><a class="dropdown-item" href="mobiliario.php">Mobiliario Y Mucho Más</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../formulario_pqr.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="../sobre_nosotros.php">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="../trabajaconnosotros.php">Trabaja Con Nosotros</a></li>
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

          <form action="../../model/usuarios/registro.php" method="POST">
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
          <img src="../images/nav/img1mod.jpg" class="img-fluid imagen-modal" alt="Registro">
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
          <img src="../images/nav/sesion2.jpg" class="img-fluid imagen-fondo" alt="Login">
          <div class="avatar-container">
            <img src="../images/nav/LOGO.png" class="avatar" alt="Avatar">
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center p-4">
          <h2 class="fw-bold text-success">¡Bienvenido de nuevo!</h2>
          <p class="text-muted">Inicia sesión en tu cuenta</p>
          <form action="../../model/usuarios/login.php" method="POST">
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

<article>
    <h1 class="text-center my-5">Closet</h1>
    <div class="container mt-4 text-center">
        <div class="row g-4 card-grid">

            <!-- Producto 1 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[0]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 1"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[0]['Nombre'] ?? 'Producto 1') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset1.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[1]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 2"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[1]['Nombre'] ?? 'Producto 2') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset2.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[2]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 3"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[2]['Nombre'] ?? 'Producto 3') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset3.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[3]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 4"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[3]['Nombre'] ?? 'Producto 4') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset4.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[4]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 5"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[4]['Nombre'] ?? 'Producto 5') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset5.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 p-5">
                    <img 
                      src="/mvc/<?= htmlspecialchars($productosCloset[5]['Url_imagenes'] ?? '') ?>" 
                      class="card-img-top rounded" 
                      alt="Producto 6"
                    >
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold">
                          <?= htmlspecialchars($productosCloset[5]['Nombre'] ?? 'Producto 6') ?>
                        </h6>
                        <form action="CategoriaCloset/ProdCloset6.php" method="get">
                            <button type="submit" class="custom-button">ver más</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</article>



    <footer>
        <div class="container text-center mt-3 py-3">
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
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script type="module" src="../assets/js/firebase-config.js"></script>
</body>
</html>

