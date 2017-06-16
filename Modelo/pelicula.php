<?php

require_once 'db.php';


class Pelicula extends db
{

  function __construct()
  {
    parent::__construct();
  }

  function mostrarPelicula($id){
        //Construimos la consulta
        $sql="SELECT * from peliculas WHERE id_pelicula=".$id."";
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

}

 ?>
