<?php
  
  session_start();
  require_once '../app/conexion.php';
  $conexion = conexion();
  $sql = "INSERT INTO t_factorial(factorial,usuario_email, proceso_factorial, resultado_factorial) VALUES (?, ?, ?, ?)";
  $query = $conexion->prepare($sql);
  $query->bind_param('ssss', $_POST['num_factorial'], $_SESSION['usuario'],  $_POST['proceso'], $_POST['resultado']);
  $result = $query->execute();
  echo($result);
  $query->close();
?>