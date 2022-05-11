<!DOCTYPE html>
<html lang="es">
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?=$baseUrl?>css/main.css">
</head>
<body class="cover" style="background-image: url(<?=$baseUrl?>assets/img/loginFont.jpg);">
	<form action="<?=$baseUrl?>admin/" method="" autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">E-mail</label>
		  <input class="form-control" id="UserEmail" type="email">
		  <p class="help-block">Escribe tú E-mail</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" id="UserPass" type="text">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
	</form>
	<!--====== Scripts -->
	<script src="<?=$baseUrl?>js/jquery-3.1.1.min.js"></script>
	<script src="<?=$baseUrl?>js/bootstrap.min.js"></script>
	<script src="<?=$baseUrl?>js/material.min.js"></script>
	<script src="<?=$baseUrl?>js/ripples.min.js"></script>
	<script src="<?=$baseUrl?>js/sweetalert2.min.js"></script>
	<script src="<?=$baseUrl?>js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?=$baseUrl?>js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>