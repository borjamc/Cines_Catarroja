<?php
include_once'seguridad/seguridad.php';
include_once 'Modelo/usuario.php';
$sesion=new Seguridad();
$user=new Usuario();

if (isset($_SESSION["usuario"])==false) {
  //si no esta iniciada lo enviamos a login para que la inicie
  header('Location: login.php');
}else {
 ?>
 <html>
 	<head>
 		<title>Cines Catarroja</title>
 		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 		<script src="js/skel.min.js"></script>
 		<script src="js/skel-panels.min.js"></script>
 		<script src="js/init.js"></script>
 		<noscript>
 			<link rel="stylesheet" href="css/skel-noscript.css" />
 			<link rel="stylesheet" href="css/style.css" />
 			<link rel="stylesheet" href="css/style-desktop.css" />
 		</noscript>
 	</head>
 	<body class="homepage">

 		<!-- Header -->
 		<div id="header">
 			<div class="container">

 				<!-- Logo -->
 				<div id="logo">
 					<h1><a>Cines Catarroja</a></h1>
 				</div>

 				<!-- Nav -->
 				<?php
        if (isset($_SESSION["usuario"])) {
					echo "<nav id='nav'>";
						echo "<ul>";
							echo "<li><a href='index.php'>Pagina principal</a></li>";
							echo "<li><a href='cartelera.php'>Cartelera</a></li>";
							echo "<li class='active'><a href='myperfil.php'>MyPerfil</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='logout.php'>Cerrar sesion</a>";
						echo "</ul>";
					echo "</nav>";
				}else {
					echo "<nav id='nav'>";
						echo "<ul>";
							echo "<li class='active'><a href='index.php'>Pagina principal</a></li>";
							echo "<li><a href='cartelera.php'>Cartelera</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='login.php'>Iniciar sesion</a></li>";
				      echo "<li><a href='registro.php'>Registro</a></li>;";
						echo "</ul>";
					echo "</nav>";
				}
 				 ?>

 			</div>
 		</div>

 		<div id="banner">&nbsp;</div>
      <div id='myperfil'>
    <article class="article">
    <form class="" action="actualizarusuario.php" method="post">
        <!--Formulario de actualizar los datos de tu usuario -->
      <h2>ACTUALIZAR LOS DATOS DEL USUARIO</h2>
      <a>Usuario: <input type="text" name="usuario" value="<?=$_GET["usuario"]?>" readonly></a> <br><br>
      <a>Nombre: <input type="text" name="nombre" value="<?=$_GET["nombre"]?>"></a><br><br>
      <a>Apellidos: <input type="text" name="apellidos" value="<?=$_GET["apellidos"]?>"></a><br><br>
      <a>Email: <input type="text" name="email" value="<?=$_GET["email"]?>"></a><br><br>
      <a>Edad: <input type="text" name="edad" value="<?=$_GET["edad"]?>"></a><br><br>
      <a>DNI: <input type="text" name="dni" value="<?=$_GET["dni"]?>"></a><br><br>
      <input type="submit" name="Actualizar" value="Actualizar">
    </form>
    <?php
    if (isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['edad']) && isset($_POST['dni'])) {
      $actualizarPerfil=$user->ActualizarMiPerfil($_POST['usuario'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['edad'], $_POST['dni']);
      if ($actualizarPerfil==true) {
        header('Location: myperfil.php');
      }
  }
     ?>
</div>
  </body>
  </html>
<?php } ?>
