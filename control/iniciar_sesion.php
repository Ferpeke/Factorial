<?php
  //iniciar una sesion y hacer usa de la variable session $_SESSION
  session_start();

  require_once '../app/conexion.php';
  $conexion = conexion();

  $usuario = $_POST['usuario'];
  $contrasenia = $_POST['contrasenia'];

  // echo $usuario, $contrasenia;
  $sql = "SELECT count(*) AS usuario_existente  FROM t_usuarios WHERE usuario_email = '$usuario' AND usuario_password = '$contrasenia'";
  
  $resultado = mysqli_query($conexion, $sql);
  $usuario_new = mysqli_fetch_array($resultado)['usuario_existente'];


  if ($usuario_new > 0) {
    $_SESSION['usuario'] = $usuario;
    echo 1;
  } else {
    echo 0;
  }

  
?>