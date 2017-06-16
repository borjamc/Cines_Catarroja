<?php
include 'seguridad/seguridad.php';
include 'Modelo/usuario.php';
include 'Modelo/reserva.php';
$sesion=new Seguridad();
$peli=new Reserva();
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
      <?php
          $datospersonales=$user->MiPerfil($_SESSION['usuario']);
          foreach ($datospersonales as $datos) {
            echo "<h1>DATOS PERSONALES</h1>";
            echo "<br><br>";
            echo "Nombre: " .$datos['nombre'] ."<br><br>";
            echo "Apellidos: ".$datos['apellidos'] ."<br><br>";
            echo "Usuario: ".$datos['usuario'] ."<br><br>";
            echo "Email: ".$datos['email'] ."<br><br>";
            echo "DNI: ".$datos['dni'] ."<br><br>";
            echo "Edad: ".$datos['edad'] ."<br><br>";
            echo "<a href='actualizarusuario.php?nombre=".$datos['nombre']."&apellidos=".$datos['apellidos']."&usuario=".$datos['usuario']."&email=".$datos['email']."&dni=".$datos['dni']."&edad=".$datos['edad']."'>Actualizar tus datos.</a>";
            echo "<br><br><br><br><br>";
          }
         ?>
         <h1>RESERVAS PENDIENTES</h1>
         <?php
          $reservaspendientes=$peli->mostrarReserva(date("Y-m-d"), $_COOKIE['id_usuario']);
          foreach ($reservaspendientes as $reserva) {
            echo "<br>Pelicula: " .$reserva["nombre"] ."<br><br>";
            echo "Fecha: " .$reserva['fecha'] ."<br><br>";
            echo "Hora: " .$reserva['hora'] ."<br><br>";
            echo "Numero de personas: " .$reserva['personas'] ."<br><br>";
            echo "<a href='borrarreserva.php?id=".$reserva['idreserva']."'>Eliminar reserva</a><br><br>";
          }
         ?>








    </div>
  </body>
  </html>









<?php } ?>
