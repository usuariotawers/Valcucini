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

    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <link rel="stylesheet" href="css/trabajaconnosotros.css">


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


    
    <section class="content-trabajo">
        <h1>🛠️ Trabaja con Nosotros</h1>
        <p>¿Apasionado por el diseño, la carpintería o el mobiliario personalizado? En <strong>Cocinas Valcucini</strong>, buscamos personas creativas y comprometidas. ¡Postula ahora y sé parte de nuestro equipo!</p>
    
        <!-- Botón que abre el modal -->
        <button id="mostrarFormulario" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLoginRequired">
            📩 Envíanos tu hoja de vida
        </button>
    
        <!-- Modal de Alerta de Inicio de Sesión -->
        <div class="modal fade" id="modalLoginRequired" tabindex="-1" aria-labelledby="modalLoginRequiredLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-attention">
                <div class="modal-content border border-warning shadow-lg">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="modalLoginRequiredLabel">Atención</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        Debes iniciar sesión para poder contactarnos.
                    </div>
                    <div class="modal-footer">
                        <button id="btnLogin" type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#RegistroModal">
                            Iniciar Sesión
                        </button>
                        <button id="btnClose" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Formulario de trabajo: solo visible si está logueado -->
        <form id="formularioTrabajo" class="formulario-oculto" action="ruta-para-enviar-formulario.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>
    
            <label for="telefono">Teléfono / WhatsApp:</label>
            <input type="tel" id="telefono" name="telefono" required>
    
            <label for="registroEmail">Correo electrónico:</label>
            <input type="email" class="form-control" id="registroEmail" placeholder="Correo electrónico" required>
    
            <label for="cargo">Cargo al que postulas:</label>
            <select id="cargo" name="cargo" required>
                <option value="">-- Selecciona una opción --</option>
                <option value="carpintero">Carpintero</option>
                <option value="instalador">Instalador</option>
                <option value="disenador">Diseñador de interiores</option>
                <option value="asesor">Asesor comercial</option>
            </select>
    
            <label for="ciudad">Ciudad de residencia:</label>
            <input type="text" id="ciudad" name="ciudad" required>
    
            <label for="experiencia">Experiencia (breve descripción):</label>
            <textarea id="experiencia" name="experiencia" rows="4" required></textarea>
    
            <label for="archivo">Adjuntar CV o Portafolio (PDF / Imágenes):</label>
            <input type="file" id="archivo" name="archivo" accept=".pdf,.jpg,.jpeg,.png" required>
    
            <div class="checkbox-group">
                <label><input type="checkbox" name="herramientas"> Dispongo de herramientas propias</label>
                <label><input type="checkbox" name="transporte"> Dispongo de transporte propio</label>
            </div>
    
            <button type="submit">Enviar solicitud</button>
        </form>
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

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script type="module" src="assets/js/firebase-config.js"></script>
</body>
</html>