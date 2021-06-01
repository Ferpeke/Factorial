<?php
  
  require_once '../app/conexion.php';

  $conexion = conexion();

  // $nombre = $_POST['nombre'];
  // $paterno = $_POST['paterno'];
  // $materno = $_POST['materno'];
  // $email = $_POST['email'];
  // $contrasenia = $_POST['contrasenia'];

  $sql = 'INSERT INTO t_usuarios (usuario_nombre, usuario_paterno, usuario_materno,usuario_email, usuario_password ) 
                                  VALUES (?, ?, ?, ?, ?)';
 $query = $conexion->prepare($sql);
 $query->bind_param('sssss', $_POST['nombre'], $_POST['paterno'],$_POST['materno'], $_POST['email'], $_POST['contrasenia']);
 $result = $query->execute();
 echo $result;
 $conexion->close();
  
?>