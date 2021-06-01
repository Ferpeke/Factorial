<?php

  function conexion(){
    $conexion = new mysqli('localhost', 'root', 'Nandodrago4', 'factorial', 33061);

    if($conexion->errno){
      echo 'Error en la conexion' . $conexion->errno;
    } else {
       return $conexion;
    }
   }
  
  
?>