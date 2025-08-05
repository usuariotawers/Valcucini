<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Valcucini</title>
  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/navstyle.css">
    <link rel="stylesheet" href="assets/css/estilo_sobre_nosotros.css">
    <link rel="stylesheet" href="assets/css/footerstyle.css">

</head>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand ps-4" href="#" >
            <img src="assets/images/nav/LOGO.png" width="130px" alt="Valcucini" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categoria.html" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="categorias/cocinas.html">Cocinas</a></li>
                        <li><a class="dropdown-item" href="categorias/closet.html">Closets</a></li>
                        <li><a class="dropdown-item" href="categorias/escritorios.html">Escritorios</a></li>
                        <li><a class="dropdown-item" href="categorias/muebledebaño.html">Muebles De Baño</a></li>
                        <li><a class="dropdown-item" href="categorias/recepcion.html">Recepción</a></li>
                        <li><a class="dropdown-item" href="categorias/puertas.html">Puertas</a></li>
                        <li><a class="dropdown-item" href="categorias/entretinimiento.html">Centro De Entretenimiento</a></li>
                        <li><a class="dropdown-item" href="categorias/mobiliario.html">Mobiliario Y Mucho Más</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contacto.html">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre_nosotros.html">Sobre Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="trabajaconnosotros.html">Trabaja Con Nosotros</a></li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-5" type="search" placeholder="Buscar...">
            </form>
            <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#RegistroModal">
                <i class="bi bi-person-circle fs-3"></i>
            </a> 
        </div>
    </div>
</nav>

    <!-- Modal de Registro -->
    <div class="modal fade" id="RegistroModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row g-0">
                    <!-- Sección de formulario -->
                    <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                        <!-- Botón de cierre -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                        <!-- Título -->
                        <h2 class="fw-bold text-center text-success">Registrarse</h2>
                        <p class="text-muted text-center">Por favor, ingresa tus datos</p>

                        <!-- Formulario -->
                        <form id="registroForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Apellido" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="registroEmail" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="registroPassword" placeholder="Contraseña" required>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="not-robot" required>
                                <label class="form-check-label" for="not-robot">No soy un robot</label>
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Registrarse</button>
                        </form>

                        <!-- Separador -->
                        <div class="text-center my-3">o</div>

                        <!-- Botón Google -->
                        <button class="btn text-dark  btn-outline-light w-100 border" onclick="registerWithGoogle()">
                            <i class="bi bi-google"></i> Registrarse con Google
                        </button>

                        <!-- Enlace para iniciar sesión -->
                        <p class="mt-3 text-muted text-center">
                            ¿Ya tienes una cuenta?
                            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#LoginModal">Iniciar sesión</a>
                        </p>
                    </div>

                    <!-- Sección de imagen -->
                    <div class="col-md-6 modal-image">
                        <img src="assets/images/nav/modal/modal-img.jpg" alt="Imagen de registro" class="img-fluid imagen-modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <!-- Modal de Inicio de Sesión -->
    <div class="modal fade" id="LoginModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content text-center">
                <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                <div class="row g-0">
                    <!-- Sección de imagen y avatar -->
                    <div class="col-md-6 p-0 position-relative">
                        <img src="assets/images/nav/modal/modal-sesion.jpg" alt="Fondo de inicio de sesión" class="img-fluid imagen-fondo">
                        <div class="avatar-container">
                            <img src="assets/images/nav/LOGO.png" alt="Avatar" class="avatar">
                        </div>
                    </div>

                    <!-- Sección de formulario -->
                    <div class="col-md-6 d-flex flex-column justify-content-center p-4">
                        <h2 class="fw-bold text-success">¡Bienvenido de nuevo!</h2>
                        <p class="text-muted">Inicia sesión en tu cuenta</p>

                        <!-- Formulario de inicio de sesión -->
                        <form id="loginForm">
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" id="loginEmail" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" id="loginPassword" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Iniciar Sesión</button>

                            <div class="text-center my-3">o</div>

                            <button class="btn text-dark btn-outline-light w-100 border" onclick="loginWithGoogle()">
                                <i class="bi bi-google"></i> Continuar con Google
                            </button>

                            <p class="mt-3">
                                <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#ResetPasswordModal">Olvidé mi contraseña</a>
                            </p>
                        </form>

                        <p class="mt-3 text-muted">
                            ¿No tienes una cuenta? <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#RegistroModal">Regístrate</a>
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
    
    <section class="about-section d-flex flex-column flex-md-row">
        <div class="about-text">
            <h2>Sobre Valcucini</h2>
            <p>En Valcucini nos dedicamos a proporcionar una plataforma donde los productos se exhiben con un diseño atractivo y funcional. 
            Nuestro objetivo es brindar un espacio intuitivo y accesible para que los clientes descubran productos únicos y de calidad.</p>
            <div class="buttons pt-4">
                <a href="categoria.html" class="btn btn-explora">Explora más</a>            
        </div>
            </div>
        <div class="about-video">
            <video autoplay loop muted width="700" height="600">
                <source src="assets/images/nosotros/nosotros.mp4" type="video/mp4">
            </video>
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
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script type="module" src="assets/js/firebase-config.js"></script>

</body>
</html>
