<!DOCTYPE HTML>
<<?php
include 'seguridad/seguridad.php';
$sesion=new Seguridad();
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
							echo "<li class='active'><a href='index.php'>Pagina principal</a></li>";
							echo "<li><a href='cartelera.php'>Cartelera</a></li>";
							echo "<li><a href='myperfil.php'>MyPerfil</a></li>";
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

		<div id="featured">
			<div class="container">
				<div class="row">

					<div class="3u">
						<section>
							<h1>TERROR</h1>
							<a href="peliculas/lamomia.php" class="image full"><img src="images/lamomia.jpg" alt=""></a>
							<header>
								<h2>La Momia</h2>
							</header>
							<p>Sinopsis: Pese a estar enterrada en una tumba sellada bajo las inclementes arenas del desierto, una antigua princesa (Sofia Boutella) cuyo destino le fue injustamente arrebatado se despierta en la actualidad, trayendo consigo una maldad alimentada durante siglos y horrores que desafían la comprensión humana. Desde las caprichosas arenas de Oriente Medio a los laberintos sepultados bajo el Londres de hoy en día, LA MOMIA evoca emociones de sorprendente intensidad con una apasionante combinación de adrenalina y momentos estremecedores en una imaginativa nueva versión que nos transporta a un mundo de dioses y monstruos.</p>
						</section>
					</div>

					<div class="3u">
						<section>
								<h1>CIENCIA FICCION</h1>
							<a href="peliculas/guardianesgalaxia.php" class="image full"><img src="images/gog.jpg" alt=""></a>

							<header>
								<h2>Guardianes de la galaxia Vol.2</h2>
							</header>
							<p>Sinopsis: Awesome Mix Vol. 2 es el nuevo telón de fondo sonoro de "Guardianes de la Galaxia Vol. 2" de Marvel que narra las aventuras del equipo mientras atraviesan los confines del cosmos. Los Guardianes deben luchar para mantener unida a su nueva familia mientras desentrañan el misterio de la verdadera filiación de Peter Quill. Los viejos enemigos se convierten en nuevos aliados y los personajes favoritos de los fans provenientes de los cómics clásicos acudirán en ayuda de nuestros héroes mientras el Universo Cinematográfico Marvel sigue expandiéndose.</p>
						</section>
					</div>

					<div class="3u">
						<section>
							<h1>COMEDIA</h1>
							<a href="peliculas/policia.php" class="image full"><img src="images/polis.jpg" alt=""></a>
							<header>
								<h2>Una policia en apuros</h2>
							</header>
							<p>Sinopsis: Johanna Pasquali es una mujer que sueña con unirse a un grupo de policías de élite conocido como RAID. Tras mucha dedicación y a pesar de su torpeza, consigue entrar en el equipo, aunque le toca formar pareja con el agente Eugene Froissard, el miembro más misógino del cuerpo. Juntos deberán detener a un grupo criminal, pero antes deberán aprender a trabajar juntos sin matarse.</p>
						</section>
					</div>

					<div class="3u">
						<section>
							<h1>INFANTIL</h1>
							<a href="peliculas/infantil.php" class="image full"><img src="images/infantil.jpg" alt=""></a>
							<header>
								<h2>Capitan calzoncillos</h2>
							</header>
							<p>Sinopsis: George y Harold son dos niños de primaria a los que les encantan los cómics y se dedican a pintar y dibujar historietas cuyo personaje central es el 'Capitán Calzoncillos'. Un día, de manera accidental, hipnotizan al director de su escuela, provocando su transformación en el mismo Capitán Calzoncillos de sus alocados tebeos. Cada vez que alguien chasquea los dedos, el Sr. Krupp se convierte en este superhéroe, que debe sus poderes a sus turbocalzones. Para volver a ser el Sr. Krupp, basta con que se le eche agua por encima.</p>
						</section>
					</div>

				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<a>Design by Borja Molina</a>
			</div>
		</div>

	</body>
</html>
