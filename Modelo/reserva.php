<?php

require_once 'db.php';


class Reserva extends db
{

  function __construct()
  {
    parent::__construct();
  }

      function hacerReserva($personas,$hora,$fecha,$idpelicula,$iduser){
    $sql="INSERT INTO reserva(idreserva, personas, hora, fecha, id_pelicula, idusuario) VALUES (NULL, ".$personas.", '".$hora."', '".$fecha."', ".$idpelicula.", ".$iduser.")";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos la ultima reserva insertada
      $sql="SELECT * from reserva ORDER BY idreserva DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        //sacamos el resultado con un fetch_assoc
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }

  function mostrarReserva($fecha, $usuario){
        //Construimos la consulta
        $sql="SELECT * FROM reserva INNER JOIN peliculas ON reserva.id_pelicula=peliculas.id_pelicula WHERE fecha>='".$fecha."' AND idusuario=".$usuario."";
        //Realizamos la consulta
        $resultado=$this->realizarConsulta($sql);
        if($resultado!=null){
          //Montamos la tabla de resultado
          $tabla=[];
          while($fila=$resultado->fetch_assoc()){
            $tabla[]=$fila;
          }
          return $tabla;
        }else{
          return null;
        }
      }

      public function borrarReserva($id)
        {
          $sql="DELETE FROM reserva WHERE idreserva=".$id."";
          echo $sql;
          $borrarreserva=$this->realizarConsulta($sql);
          if ($borrarreserva=!NULL) {
            return true;
          }else {
            return false;
          }
        }

}

 ?>
