<!DOCTYPE HTML>
<<?php
include '../seguridad/seguridad.php';
include '../Modelo/pelicula.php';
include '../Modelo/usuario.php';
include '../Modelo/reserva.php';
include '../Modelo/comentarios.php';
$sesion=new Seguridad();
$peli=new Pelicula();
$user=new Usuario();
$reserva=new Reserva();
$coment=new Comentarios()
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
							echo "<li><a href='../index.php'>Pagina principal</a></li>";
							echo "<li><a href='../cartelera.php'>Cartelera</a></li>";
							echo "<li><a href='../myperfil.php'>MyPerfil</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='../logout.php'>Cerrar sesion</a>";
						echo "</ul>";
					echo "</nav>";
				}else {
					echo "<nav id='nav'>";
						echo "<ul>";
							echo "<li><a href='../index.php'>Pagina principal</a></li>";
							echo "<li><a href='../cartelera.php'>Cartelera</a></li>";
							echo "<li><a href='../contacto.php'>Contactanos</a></li>";
							echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>";
							echo "<li><a href='../login.php'>Iniciar sesion</a></li>";
							echo "<li><a href='../registro.php'>Registro</a></li>;";
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
							<h1>Alien: Covenant</h1>
							<a class="image full"><img src="images/alien.jpg" alt=""></a>
							<p>Sinopsis: Rumbo a un remoto planeta en el lado lejano de la galaxia, la tripulación de la nave colonial Covenant descubre lo que ellos piensan que es un paraíso desconocido, pero en realidad es un mundo oscuro y peligroso cuyo único habitante es el "sintético" David (Michael Fassbender), diez años después el único sobreviviente de la condenada expedición Prometheus...</p>
						</section>
					</div>
					<div class="3u">
						<section>
							<h1>Trailer</h1>
              <iframe width="560" height="380" src="https://www.youtube.com/embed/_O6YW4Rxubk?ecver=1" frameborder="0" allowfullscreen></iframe>
              <br><br>
              <h1>Sección de comentarios</h1>
              <?php
              if (isset($_SESSION['usuario'])) {
                echo "<br><br><br>";
                echo "<h2>Inserte su comentario</h2>";
                 ?>
                <form class="" action='alien.php' method='post'>
                <input type="text" name="comentario" value="0"><br><br>
                <input type="hidden" name="id_pelicula" value= "8">
                <input type="submit" name="Insertar" value="Comentar">
                <?php
                if (isset($_POST['comentario']) && $_POST['comentario']<>"0") {
                  $insertar=$coment->insertarComentario($_POST['comentario'], $_COOKIE['id_usuario'], $_POST['id_pelicula']);
                  if ($insertar==null) {
                    echo "Error al registrar el comentario.";
                  }
              }
              }
              $listacomentarios=$coment->mostrarComentario(8);
          foreach ($listacomentarios as $comentario) {
            echo "<br><br><a>Nombre: " .$comentario['nombre'] ."<br><br></a>";
            echo "<a>Comentario: " .$comentario['comentario'] ."<br><br></a>";
          }
               ?>
						</section>
					</div>
					<div class="3u">
						<section>
							<p/>
						</section>
					</div>
					<div class="3u">
						<section>
							<ul>
                <li><p> <b>Duración</b>: 123 min </p></li>
								<li><p> <b>País</b>: Estados Unidos </p></li>
								<li><p> <b>Género</b>: Acción - Terror - Ciencia ficción - Suspense </p></li>
								<li><p> <b>Estreno</b>: 12/05/2017 </p></li>
								<li><p> <b>Directores</b>: Raymond Kirk, Ridley Scott </p></li>
								<li><p> <b>Actores</b>: Billy Crudup, Danny Mcbride, Demián Bichir, Katherine Waterston, Michael Fassbender, Noomi Rapace </p></li>
								<li><p> <b>Guionistas</b>: Jack Paglen, John Logan, Michael Green </p></li>
								<li><p> <b>Productores</b>: Scott Free Productions, Twentieth Century Fox Film Corporation </p></li>
								<?php
								if (isset($_SESSION['usuario'])) {
								 ?>
								 		<h1>RESERVA</h1><br><br>
										<form class="" action='alien.php' method='post'>
													<a>Fecha:</a> <input type="date" name="fecha" value= ""><br><br>
										      <a>Hora:</a> <select name="hora">
			   													<option value='8:30'>8:30</option>
																	<option value='12:00'>12:00</option>
																	<option value='14:15'>14:15</option>
																	<option value='16:30'>16:30</option>
																	<option value='18:40'>18:40</option>
																	<option value='20:00'>20:00</option>
																</select><br><br>
										      <a>Numero de personas: </a><input type="number" name="personas" value="" min="1" max="50">
                          <input type="hidden" name="id_pelicula" value= "8"><br><br>
										      <input type="submit" name="Reservar" value="Reservar">
							</ul>
										<?php

                    $datospersonales=$user->MiPerfil($_SESSION['usuario']);
                    foreach ($datospersonales as $datos) {
                    ?><input type="hidden" name="edad" value= "<?php ".$datos ['edad']."  ?>">;<?php
                    }
                    if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['personas']) && isset($_POST['id_pelicula'])) {
                        if ($_POST['edad']>16) {
                            $reservar=$reserva->hacerReserva($_POST['personas'],$_POST['hora'],$_POST['fecha'],$_POST['id_pelicula'],$_COOKIE['id_usuario']);
                        }else {
                          echo "<br><br><a>Edad insuficiente para hacer la reserva de esta pelicula</a><br><br>";
                        }
                    }
                  }
                    ?>
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