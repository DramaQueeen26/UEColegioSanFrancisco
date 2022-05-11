<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $title . ' - ' . $site_name?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?=$baseUrl?>css/main.css">
</head>

<body>
	<!-- Barra deslizante izquierda -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">

			<!-- Nombre del Colegio  -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				E.U. Colegio San Francisco <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>

			<!-- INFORMACIÓN DE USUARIO, PARTE LATERAL -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="<?=$baseUrl?>assets/img/admin.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">El admin pá</figcaption>
				</figure>
				<!-- Botones de iniciar sesión y configuración-->
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>


			<!-- Menu de barra deslizante-->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="<?=$baseUrl?>admin/">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Home
					</a>
				</li>

				<!--Administrar -->
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administrar <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<!-- Submenú de Administrar-->
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="<?=$baseUrl?>admin/subject/"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Materias</a>
						</li>
						<li>
							<a href="<?=$baseUrl?>admin/section/"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Secciones</a>
						</li>
					</ul>
				</li>

				<!-- Usuarios -->
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>

					<!-- Submenú de usuarios-->
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?=$baseUrl?>admin/admin/"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="<?=$baseUrl?>admin/teacher/"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Docentes</a>
						</li>
						<li>
							<a href="<?=$baseUrl?>admin/student/"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes</a>
						</li>
					</ul>
				</li>

				<!-- Metodos de Pago
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Payments <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registration.html"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registration</a>
						</li>
						<li>
							<a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>
					</ul>
				</li>
				<li>
				

					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Settings School <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="school.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> School Data</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	-->
	</section>

		<!-- Parte Principal -->
	<section class="full-box dashboard-contentPage">
		 
		<!-- Barra de navegación-->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<!--
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">r
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				-->
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>