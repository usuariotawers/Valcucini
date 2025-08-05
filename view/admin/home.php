<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Título de la pestaña -->
	<title>Admin</title>

	<!-- Metadatos esenciales -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Iconos: Material Design Iconic Font -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-iconic-font@2.2.0/dist/css/material-design-iconic-font.min.css">

	<!-- Framework CSS: Bootstrap 5 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
		  
	<!-- Estilos personalizados -->
	<link rel="stylesheet" href="../css/dashboard/main.css">
</head>

<body>
	<?php include("../../controller/dashboard/kpis.php"); ?>

	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				VALCUCINI <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../images/Iconos/Admin.png" alt="UserIcon">
					<figcaption class="text-center text-titles">ADMINISTRADOR</figcaption>
				</figure>
			<div class="user-status" id="userStatus">
  <i id="statusIcon" class="zmdi zmdi-check-circle status-icon online"></i>
  <span id="statusText">Disponible</span>
</div>
<div class="last-session" id="lastSession">
  Última sesión: <span id="sessionTime"></span>
</div>


                <!-- CONFIG...ICONO -->
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
                    <!-- SALIR ICONO -->
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">

  <!-- Dashboard -->
  <li>
    <a href="home.php">
      <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
    </a>
  </li>

  <!-- Inventario -->
  <li>
  <a href="#!" class="btn-sideBar-SubMenu">
    <i class="zmdi zmdi-store zmdi-hc-fw"></i> Inventario <i class="zmdi zmdi-caret-down pull-right"></i>
  </a>
  <ul class="list-unstyled full-box">
    <li><a href="productos.php"><i class="zmdi zmdi-label zmdi-hc-fw"></i> Productos</a></li>
    <li><a href="categorias.php"><i class="zmdi zmdi-tag-more zmdi-hc-fw"></i> Categorías</a></li>
  </ul>
</li>


  <!-- Usuarios -->
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-accounts zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li><a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a></li>
      <li><a href="empleados.html"><i class="zmdi zmdi-accounts-list zmdi-hc-fw"></i> Empleados</a></li>
    </ul>
  </li>

  <!-- Reportes -->
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-file-text zmdi-hc-fw"></i> Reportes <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li><a href="reporte-inventario.html"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Inventario General</a></li>
      <li><a href="reporte-movimientos.html"><i class="zmdi zmdi-swap-alt zmdi-hc-fw"></i> Movimientos</a></li>
      <li><a href="reporte-bajo-stock.html"><i class="zmdi zmdi-alert-circle zmdi-hc-fw"></i> Bajo Stock</a></li>
    </ul>
  </li>

  <!-- Configuración -->
  <li>
    <a href="#!" class="btn-sideBar-SubMenu">
      <i class="zmdi zmdi-settings zmdi-hc-fw"></i> Configuración <i class="zmdi zmdi-caret-down pull-right"></i>
    </a>
    <ul class="list-unstyled full-box">
      <li><a href="ajustes-generales.html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i> Ajustes generales</a></li>
      <li><a href="perfil.html"><i class="zmdi zmdi-account-box-o zmdi-hc-fw"></i> Perfil</a></li>
    </ul>
  </li>

</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<!-- Content page -->
<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard <small>Home</small></h1>
	</div>
	<p class="lead">Bienvenido al panel de administración. Aquí encontrarás un resumen general del estado de tu sistema.</p>
</div>

<div class="container-fluid mt-4 dashboard-home">
  <div class="row g-4 justify-content-center">

    <!-- Total de Productos -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center gap-3">
          <div class="icon-box text-center">
            <i class="zmdi zmdi-shopping-cart zmdi-hc-3x text-primary"></i>
          </div>
          <div class="text-box">
            <h5 class="card-title mb-1">Total de Productos</h5>
            <h2 class="text-primary mb-0"><?php echo $totalProductos; ?></h2>
            <small class="text-muted">Registrados</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Cotizaciones en Espera -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center gap-3">
          <div class="icon-box text-center">
            <i class="zmdi zmdi-time zmdi-hc-3x text-warning"></i>
          </div>
          <div class="text-box">
            <h5 class="card-title mb-1">Cotizaciones</h5>
            <h2 class="text-warning mb-0"><?php echo $totalCotizaciones; ?></h2>
            <small class="text-muted">En Espera</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Clientes Registrados -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body d-flex align-items-center gap-3">
          <div class="icon-box text-center">
            <i class="zmdi zmdi-accounts zmdi-hc-3x text-success"></i>
          </div>
          <div class="text-box">
            <h5 class="card-title mb-1">Clientes</h5>
            <h2 class="text-success mb-0"><?php echo $totalClientes; ?></h2>
            <small class="text-muted">Registrados</small>
          </div>
        </div>
      </div>
    </div>

  </div>
<!-- Charts Section -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="full-box tile">
				<div class="tile-title">
					<h3 class="text-titles"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> Visualizaciones Página</h3>
					<p style="margin: 0; color: #999; font-size: 0.9rem;">Últimos 7 días</p>
				</div>
				<div class="tile-body">
					<div style="height: 300px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 4px;">
						<canvas id="visitasChart" width="400" height="200" style="max-width: 100%; max-height: 100%;"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="full-box tile">
				<div class="tile-title">
					<h3 class="text-titles"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i> Productos Más Buscados</h3>
					<p style="margin: 0; color: #999; font-size: 0.9rem;">Top 5 productos</p>
				</div>
				<div class="tile-body">
					<div style="height: 300px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 4px;">
						<canvas id="productosChart" width="400" height="200" style="max-width: 100%; max-height: 100%;"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Activity Section -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="full-box tile">
				<div class="tile-title">
					<h3 class="text-titles"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Actividad Reciente</h3>
				</div>
				<div class="tile-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Fecha</th>
									<th class="text-center">Usuario</th>
									<th class="text-center">Acción</th>
									<th class="text-center">Tipo</th>
									<th class="text-center">Estado</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">2024-01-15 10:30</td>
									<td class="text-center">Carlos Alfaro</td>
									<td class="text-center">Nuevo producto agregado</td>
									<td class="text-center"><span class="label label-info">Producto</span></td>
									<td class="text-center"><i class="zmdi zmdi-check-circle" style="color: #4CAF50;"></i></td>
								</tr>
								<tr>
									<td class="text-center">2024-01-15 09:45</td>
									<td class="text-center">Alicia Melendez</td>
									<td class="text-center">Cotización enviada</td>
									<td class="text-center"><span class="label label-warning">Cotización</span></td>
									<td class="text-center"><i class="zmdi zmdi-time" style="color: #FF9800;"></i></td>
								</tr>
								<tr>
									<td class="text-center">2024-01-15 08:20</td>
									<td class="text-center">Sarai Lopez</td>
									<td class="text-center">Cliente registrado</td>
									<td class="text-center"><span class="label label-success">Cliente</span></td>
									<td class="text-center"><i class="zmdi zmdi-check-circle" style="color: #4CAF50;"></i></td>
								</tr>
								<tr>
									<td class="text-center">2024-01-14 16:15</td>
									<td class="text-center">Alba Bonilla</td>
									<td class="text-center">Producto actualizado</td>
									<td class="text-center"><span class="label label-info">Producto</span></td>
									<td class="text-center"><i class="zmdi zmdi-check-circle" style="color: #4CAF50;"></i></td>
								</tr>
								<tr>
									<td class="text-center">2024-01-14 14:30</td>
									<td class="text-center">Carlos Alfaro</td>
									<td class="text-center">Respaldo generado</td>
									<td class="text-center"><span class="label label-primary">Sistema</span></td>
									<td class="text-center"><i class="zmdi zmdi-check-circle" style="color: #4CAF50;"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>

	
<!-- script-->
 <script>
document.querySelectorAll('.btn-sideBar-SubMenu').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();

    let parentLi = this.parentNode;
    let submenu = parentLi.querySelector('ul');

    if (submenu) {
      submenu.classList.toggle('show'); // <-- Cambiado aquí
    }
  });
});

</script>

    <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"type="module"></script>
  <script src="../js/admin/admin.js"></script>
  	<script src="../js/admin/graficos.js"></script>
   		<script src="../js/admin/estadoAdm.js"></script>
   <!-- JS de Bootstrap (requiere Popper.js que ya viene incluido) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- script GRAFICOS ADM-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>
</html>