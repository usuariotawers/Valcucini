<?php require_once(__DIR__ . '/../controller/guardar_pqr.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Valcucini</title>

    <!-- Bootstrap y estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>

<!-- Navbar -->
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

<!----------------------- PQR ------------------------->
<div class="container text-center mb-5 mt-5 pt-5"> 
    <img src="images/header/fondo.jpg" alt="Avatar" class="avatar2">

    <div class="d-flex flex-wrap justify-content-between align-items-start w-100 contact-wrapper">
        <article class="text-start pe-4">
            <h1 class="text-white">¡Estamos para escucharte!</h1>
            <p class="text-white">
                En Valcucini, nos importa tu opinión. Déjanos tu mensaje y nos pondremos en contacto contigo lo antes posible.
            </p>
        </article>

        <aside class="w-100 w-md-50">
            <h2 class="text-white text-start">Contáctanos</h2>

            <!-- ✅ FORMULARIO FUNCIONAL Y CON DISEÑO -->
           <form id="pqrForm" class="p-4 bg-light rounded shadow">
                <div class="mb-3 text-start">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3 text-start">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control" required>
                </div>

                <div class="mb-3 text-start">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>

                <div class="mb-3 text-start">
                    <label>Mensaje</label>
                    <textarea name="mensaje" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3 text-start">
                    <label>¿Deseas recibir confirmación por correo?</label>
                    <select name="confirmacion" class="form-select" required>
                        <option value="">Selecciona una opción</option>
                        <option value="Sí">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

               

                <button type="submit" class="btn btn-success w-100">Enviar</button>
            </form>
        </aside>
    </div>
</div>
<!-- Modal de Respuesta Mejorado -->
<div class="modal fade" id="pqrModal" tabindex="-1" aria-labelledby="pqrModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0">
      
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="pqrModalLabel">
          <i class="bi bi-check-circle-fill me-2"></i>Mensaje del sistema
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      
      <div class="modal-body text-center py-4">
        <div id="pqrMensaje" class="fs-5 fw-semibold"></div>
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-success px-4" data-bs-dismiss="modal">
          <i class="bi bi-x-circle"></i> Cerrar
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Footer -->
<footer>
    <div class="container text-center py-3">
        <h5 class="mt-5 mb-3">COCINAS VALCUCINI</h5>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="sobre_nosotros.html" class="footer-link">ACERCA DE NOSOTROS</a></li>
            <li class="list-inline-item"><a href="categoria.html" class="footer-link">CATEGORÍAS</a></li>
            <li class="list-inline-item"><a href="index.html" class="footer-link">INFORMACIÓN</a></li>
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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/firebase-config.js"></script>
<script>
document.getElementById("pqrForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que se recargue

    const form = this;
    const formData = new FormData(form);

    fetch("../controller/guardar_pqr.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(mensaje => {
        document.getElementById("pqrMensaje").innerText = mensaje;

        // Mostrar el modal con Bootstrap
        const modal = new bootstrap.Modal(document.getElementById("pqrModal"));
        modal.show();

        // Opcional: limpiar formulario si fue exitoso
        if (mensaje.includes("correctamente")) {
  document.querySelector("#pqrModal .modal-header").classList.add("bg-success");
  document.querySelector("#pqrModal .modal-title i").className = "bi bi-check-circle-fill me-2";
} else {
  document.querySelector("#pqrModal .modal-header").classList.remove("bg-success");
  document.querySelector("#pqrModal .modal-header").classList.add("bg-danger");
  document.querySelector("#pqrModal .modal-title i").className = "bi bi-exclamation-triangle-fill me-2";
}

    })
    .catch(() => {
        document.getElementById("pqrMensaje").innerText = "Hubo un error inesperado al enviar el formulario.";
        const modal = new bootstrap.Modal(document.getElementById("pqrModal"));
        modal.show();
    });
});
</script>

</body>
</html>
