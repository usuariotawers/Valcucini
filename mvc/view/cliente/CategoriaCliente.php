<?php
require_once '../../config/database.php';
require_once '../../model/usuarios/categoria_cliente_model.php';

$database = new Database();
$model = new CategoriaModel($database->connect());
$categorias = $model->obtenerTodas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias Inmuebles</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="../css/navstyle.css">
    <link rel="stylesheet" href="../css/footerstyle.css">
    <link rel="stylesheet" href="../css/inmobiliario.css">
    <link rel="stylesheet" href="../css/nav_cliente_style.css">

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
                    <li class="nav-item"><a class="nav-link" href="../../cliente.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../cliente/CategoriaCliente.php" role="button" data-bs-toggle="dropdown" onclick="window.location=this.href">Mobiliario</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/cocinas.php">Cocinas</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/closet.php">Closets</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/escritorios.php">Escritorios</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/muebledebaño.php">Muebles De Baño</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/recepcion.php">Recepción</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/puertas.php">Puertas</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/entretenimiento.php">Centro De Entretenimiento</a></li>
                            <li><a class="dropdown-item" href="../cliente/categorias_usuarios/mobiliario.php">Mobiliario Y Mucho Más</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../cliente/contacto_cliente.html">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="../cliente/sobre_nosotros_cliente.html">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="../cliente/trabajaconnosotrosusuario.php">Trabaja Con Nosotros</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-5" type="search" placeholder="Buscar...">
                </form>
                <div class="dropdown user-dropdown">
                    <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-3" style="color: black;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="../cliente/mi-cuenta.html">MI CUENTA</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item logout" href="../index.html">SALIR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        
    
<!----------------------- Categorias ------------------------->
<main>
  <h1 class="text-center mt-5">Categorías Mobiliario</h1>
  <div class="container my-5">
    <div class="row g-4 card-grid">

      <!-- TARJETA 1 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[0]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[0]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[0]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal1">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 2 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[1]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[1]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[1]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal2">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 3 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[2]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[2]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[2]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal3">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 4 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[3]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[3]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[3]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal4">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 5 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[4]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[4]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[4]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal5">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 6 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[5]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[5]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[5]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal6">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 7 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[6]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[6]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[6]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal7">Ver</button>
          </div>
        </div>
      </div>

      <!-- TARJETA 8 -->
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card text-center h-100 p-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[7]['Url_imagen']) ?>" class="card-img-top rounded img-fix" alt="<?= htmlspecialchars($categorias[7]['nombre']) ?>">
          <div class="card-body d-flex flex-column justify-content-between">
            <br><h6 class="card-title fw-bold"><?= strtoupper(htmlspecialchars($categorias[7]['nombre'])) ?></h6><br>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#modal8">Ver</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL 1 -->
  <div class="modal fade" id="modal1" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[0]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[0]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[0]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/cocinas.php">
        <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
      </form>
      </div>
    </div>
  </div>

  <!-- MODAL 2 -->
  <div class="modal fade" id="modal2" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[1]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[1]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[1]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/closet.php">
        <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
      </form>
      </div>
    </div>
  </div>

  <!-- MODAL 3 -->
  <div class="modal fade" id="modal3" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[2]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[2]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[2]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/escritorios.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL 4 -->
  <div class="modal fade" id="modal4" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[3]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[3]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[3]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/muebledebaño.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL 5 -->
  <div class="modal fade" id="modal5" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[4]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[4]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[4]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/recepcion.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL 6 -->
  <div class="modal fade" id="modal6" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[5]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[5]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[5]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/puertas.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL 7 -->
  <div class="modal fade" id="modal7" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[6]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[6]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[6]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/entretenimiento.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>

  <!-- MODAL 8 -->
  <div class="modal fade" id="modal8" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content modal-content-cate">
        <button type="button" class="btn-close btn-close-cate m-2" data-bs-dismiss="modal"></button>
        <h1 class="text-center mb-5"><?= htmlspecialchars($categorias[7]['nombre']) ?></h1>
        <div class="modal-image-cate mb-5">
          <img src="/mvc/<?= htmlspecialchars($categorias[7]['Url_imagen']) ?>" class="img-fluid rounded">
        </div>
        <div class="descripcion-producto mb-2">
          <p><?= nl2br(htmlspecialchars($categorias[7]['Descripcion'])) ?></p>
        </div>
        <form action="categorias_usuarios/mobiliario.php">
          <button type="submit" class="btn btn-dark w-100 modal-button">Ver categoría</button>
        </form>
      </div>
    </div>
  </div>
</main>
    
    <!--------------------------- pie de pagina----------------------------->

    <footer>
        <div class="container text-center py-3">
            <h5 class=" mt-5 mb-3">COCINAS VALCUCINI</h5>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="../cliente/sobre_nosotros -usuario.html" class="footer-link">ACERCA DE NOSOTROS</a></li>
                <li class="list-inline-item"><a href="../cliente/categoria-usuario.html" class="footer-link">CATEGORÍAS</a></li>
                <li class="list-inline-item"><a href="../cliente.html" class="footer-link">INFORMACIÓN</a><li></li>
                    
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
    <script type="module" src="../../assets/js/firebase-config.js"></script>


</body>
</html
