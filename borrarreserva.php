<?php

include '/modelo/reserva.php';

$reserva=new Reserva();

$borrarreserva=$reserva->borrarReserva($_GET["id"]);
if($borrarreserva==true){
  header('Location: myperfil.php');
}else{
  echo "Error al borrar";
}



 ?>
