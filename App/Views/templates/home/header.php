<!DOCTYPE html>
<html lang="en">
<head>
<title>Colegio San Francisco</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?=$baseUrl?>css/styles/layout.css" type="text/css" />

<!-- Para la galería -->
<?php if($title == 'Galería'){
  echo '<link rel="stylesheet" href="'.$baseUrl.'css/styles2/layout.css" type="text/css" />';
}?>

<script type="text/javascript" src="<?=$baseUrl?>js/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?=$baseUrl?>js/scripts/jquery.slidepanel.setup.js"></script>

<script type="text/javascript" src="<?=$baseUrl?>js/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>

</head>
<body>
  <!-- LOGIN -->
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>¡Conéctate!</h2>
        <p>Ingresa a nuestra página como docente o como alumno.<br> <br> Si no conoces tu usuario o contraseña, dirigite a la oficina dentro de la escuela.</p>
      </div>
      <div class="topbox">
        <h2>Docente</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Ingreso de docentes</legend>
            <label for="teachername">Usuario:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Contraseña:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Recordar dispositivo</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Entrar" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Borrar" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Alumno</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Ingreso de Alumnos</legend>
            <label for="pupilname">Usuario:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Contraseña:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Recordar dispositivo</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Entrar" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Borrar" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li  class="left">Conéctate &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="<?=$baseUrl?>SistemaAdministracion/index.html">Login</a><a id="closeit" style="display: none;" href="<?=$baseUrl?>SistemaAdministracion/index.html">Cerrar panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

<!-- Logo y barra de navegación -->
<div class="wrapper col1">
  <div id="header">
    <div id="logofeyalegria">
      <img class="logofe" src="<?=$baseUrl?>images/logofeyalegria 2.png" alt="logofeyalegria">
    </div>
    <div id="logo">
      <br>
      <h1><a href="<?=$baseUrl?>"></a>U.E. Colegio<br>San Francisco</h1>
      <p>Lema del colegio</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="<?=$baseUrl?>">Inicio</a></li>
        <li><a href="<?=$baseUrl?>home/college/">Colegio</a></li>
        <li><a href="<?=$baseUrl?>home/gallery/">Galería</a></li>
        <li><a href="#">Publicaciones</a></li>  
        <li class="last"><a href="#">Contacto</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

