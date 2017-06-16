<!DOCTYPE HTML>
<<?php
include 'seguridad/seguridad.php';
$sesion=new Seguridad();
 ?>
<html>
	<head>
		<title>CARTELERA</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
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
	<body>

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
							echo "<li class='active'><a href='cartelera.php'>Cartelera</a></li>";
							echo "<li><a href='myperfil.php'>MyPerfil</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='logout.php'>Cerrar sesion</a>";
						echo "</ul>";
					echo "</nav>";
				}else {
					echo "<nav id='nav'>";
						echo "<ul>";
							echo "<li><a href='index.php'>Pagina principal</a></li>";
							echo "<li class='active'><a href='cartelera.php'>Cartelera</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='login.php'>Iniciar sesion</a></li>";
				      echo "<li><a href='registro.php'>Registro</a></li>;";
						echo "</ul>";
					echo "</nav>";
				}
				 ?>

			</div>
		</div>
		<!-- Header -->

		<div id="banner">&nbsp;</div>
		<div id="marketing" class="container">
			<div class="row">
				<div class="3u">
					<section>
						<header>
							<h1>American Pastoral</h1>
						</header>
						<p><a href="peliculas/pastor.php"><img src="images/americanpastoral.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>Testigo</h1>
						</header>
						<p><a href="peliculas/testigo.php"><img src="images/testigo.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>Patria</h1>
						</header>
						<p><a href="peliculas/patria.php"><img src="images/patria.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>Alien: covenant</h1>
						</header>
						<p><a href="peliculas/alien.php"><img src="images/alien.jpg" alt=""></a></p>
					</section>
				</div>
				<!-- Segunda columna -->
				<div class="3u">
					<section>
						<header>
							<h1>El Circulo</h1>
						</header>
						<p><a href="peliculas/circulo.php"><img src="images/circulo.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>Ghost in the shell</h1>
						</header>
						<p><a href="peliculas/gits.php"><img src="images/gits.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>La bella y la bestia</h1>
						</header>
						<p><a href="peliculas/bellaybestia.php"><img src="images/bella.jpg" alt=""></a></p>
					</section>
				</div>
				<div class="3u">
					<section>
						<header>
							<h1>Piratas del caribe</h1>
						</header>
						<p><a href="peliculas/piratas.php"><img src="images/piratas.jpg" alt=""></a></p>
					</section>
				</div>

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>
