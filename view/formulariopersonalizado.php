<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalización de Mobiliario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <link rel="stylesheet" href="css/formpersonalistyle.css">
    
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
                    <li class="nav-item"><a class="nav-link" href="cliente.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="cliente/categoria_cliente.html" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/cocinas.html">Cocinas</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/closet.html">Closets</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/escritorios.html">Escritorios</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/muebledebaño.html">Muebles De Baño</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/recepcion.html">Recepción</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/puertas.html">Puertas</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/entretenimiento.html">Centro De Entretenimiento</a></li>
                            <li><a class="dropdown-item" href="cliente/categorias_cliente/mobiliario.html">Mobiliario Y Mucho Más</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="cliente/contacto_cliente.html">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="cliente/sobre_nosotros_cliente.html">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="cliente/trabajaconnosotros.php">Trabaja Con Nosotros</a></li>
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
<?php
// Cargar las categorías desde la base de datos
include '../model/usuarios/cotizacion/obtener_cat.php';
?>

  <div class="container mt-5 mueble-formulario">
    <form action="../model/usuarios/cotizacion/formulariocotizacion.php" method="POST" enctype="multipart/form-data" class="p-4 my-5">
      <h2 class="titulo-mobiliario text-center mb-5">Personaliza tu Mobiliario</h2>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>

        <label for="categoria">Categoría:</label>
    <select id="categoria" name="id_categoria" required>
        <option value="">Seleccione una categoría</option>
        <?php foreach ($categorias as $cat): ?>
            <option value="<?= $cat['id_categoria'] ?>"><?= htmlspecialchars($cat['Nombre_categoria']) ?></option>
        <?php endforeach; ?>
    </select>
    
        <label for="medidas">Medidas:</label>
        <input type="number" name="ancho" placeholder="Ancho (cm)" required>
        <input type="number" name="alto" placeholder="Alto (cm)" required>
        <input type="number" name="profundidad" placeholder="Profundidad (cm)" required>


        <label for="material">Material principal:</label>
        <select id="material" name="material" required>
            <option value="madera">Madera maciza</option>
            <option value="mdf">MDF</option>
            <option value="melamina">Melamina</option>
            <option value="metal">Metal</option>
            <option value="vidrio">Vidrio</option>
        </select>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" placeholder="Ej: Blanco, Roble, Negro..." required>

        <label for="herrajeria">Herrajería:</label>
        <select id="herrajeria" name="herrajeria" required>
            <option value="nacional">Nacional</option>
            <option value="importada">Importada</option>
        </select>

        <div id="opcionesCategoria"></div>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required>

        <div id="campoTransporte" class="hidden">
            <label for="transporte">Transporte:</label>
            <select name="transporte" id="transporte" class="form-select">
                <option value="cotizacion">Incluir en cotización</option>
                <option value="cliente">Corre por cuenta del cliente</option>
            </select>
        </div>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" value="1">

        <input type="hidden" name="id_descuentos" value="5">


        <label for="imagen">Imagen de referencia:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">


      


        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="confirmacion_envio" id="confirmacion_envio" value="1" required>
            <label class="form-check-label" for="confirmacion_envio">Confirmo que deseo enviar esta solicitud</label>
        </div>

        <button type="submit" class="btn btn-primary">Enviar solicitud</button>


        <input type="hidden" name="materiales_extra" id="materiales_extra">

        <input type="hidden" name="transporte_final" id="transporte_final">
    </form>
  </div>



    <!-------- FOOTER --------->

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

  <script>
document.addEventListener('DOMContentLoaded', () => {
  const ciudadInput = document.getElementById('ciudad');
  const transporteField = document.getElementById('campoTransporte');
  const transporteSelect = document.getElementById('transporte');
  const transporteFinal = document.getElementById('transporte_final');

  const categoriaSelect = document.getElementById('categoria');
  const opcionesCategoria = document.getElementById('opcionesCategoria');
  const inputMaterialesExtra = document.getElementById('materiales_extra');

  // Mostrar u ocultar campo transporte según ciudad
  ciudadInput.addEventListener('input', () => {
    const ciudad = ciudadInput.value.trim().toLowerCase();
    if (ciudad !== 'bogota') {
      transporteField.classList.remove('hidden');
    } else {
      transporteField.classList.add('hidden');
      transporteFinal.value = ''; // limpiar si cambia a Bogotá
    }
  });

  // Capturar opción de transporte
  transporteSelect.addEventListener('change', () => {
    transporteFinal.value = transporteSelect.value;
  });

  // Cambiar campos según categoría
  categoriaSelect.addEventListener('change', () => {
    const categoria = categoriaSelect.value;
    let html = '';
    let resumenArray = [];

    switch (categoria) {
      case '1': // Cocina
        html += '<label for="encimera">Encimera o Mesón:</label>';
        html += '<select name="encimera" id="encimera" class="form-select" required>';
        html += '<option value="">Seleccione</option>';
        html += '<option>Granito</option><option>Cuarzo</option><option>Sinterizado</option></select>';

        html += '<label for="puertasCocina">Puertas:</label>';
        html += '<select name="puertasCocina" id="puertasCocina" class="form-select" required>';
        html += '<option value="">Seleccione</option>';
        html += '<option>Pintura poliuretano</option><option>Alto brillo</option><option>Melamina</option></select>';
        break;

      case '4': // Baño
        html += '<label for="lavamanos">Lavamanos:</label>';
        html += '<select name="lavamanos" id="lavamanos" class="form-select" required>';
        html += '<option value="">Seleccione</option>';
        html += '<option>Porcelanato</option><option>Fibra de vidrio</option></select>';

        html += '<label for="puertasBano">Puertas:</label>';
        html += '<select name="puertasBano" id="puertasBano" class="form-select" required>';
        html += '<option value="">Seleccione</option>';
        html += '<option>Melamina</option><option>RH</option></select>';
        break;

      case '2': // Closet
        html += '<label for="tipoCloset">Tipo de closet:</label>';
        html += '<select name="tipoCloset" id="tipoCloset" class="form-select" required>';
        html += '<option value="">Seleccione</option>';
        html += '<option>Walking Closet</option><option>Closet tradicional</option></select>';
        break;

      default:
        html = '';
    }

    opcionesCategoria.innerHTML = html;
    inputMaterialesExtra.value = '';

    setTimeout(() => {
      if (categoria === '1') {
        const encimera = document.getElementById('encimera');
        const puertas = document.getElementById('puertasCocina');

        encimera.addEventListener('change', () => {
          resumenArray[0] = `Encimera o Mesón: ${encimera.value}`;
          actualizarResumen(resumenArray);
        });

        puertas.addEventListener('change', () => {
          resumenArray[1] = `Puertas: ${puertas.value}`;
          actualizarResumen(resumenArray);
        });
      }

      if (categoria === '4') {
        const lavamanos = document.getElementById('lavamanos');
        const puertasBano = document.getElementById('puertasBano');

        lavamanos.addEventListener('change', () => {
          resumenArray[0] = `Lavamanos: ${lavamanos.value}`;
          actualizarResumen(resumenArray);
        });

        puertasBano.addEventListener('change', () => {
          resumenArray[1] = `Puertas: ${puertasBano.value}`;
          actualizarResumen(resumenArray);
        });
      }

      if (categoria === '2') {
        const tipoCloset = document.getElementById('tipoCloset');

        tipoCloset.addEventListener('change', () => {
          resumenArray[0] = `Tipo de closet: ${tipoCloset.value}`;
          actualizarResumen(resumenArray);
        });
      }
    }, 100);
  });

  function actualizarResumen(arr) {
    inputMaterialesExtra.value = arr.filter(Boolean).join(', ');
  }
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 


</body>
</html>