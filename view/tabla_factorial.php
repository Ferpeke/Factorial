<?php
    session_start();
    require_once '../app/conexion.php';
    $conexion = conexion();
    $email_usuario = $_SESSION['usuario'];
    $sql = "SELECT * FROM t_factorial WHERE usuario_email = '$email_usuario' ORDER BY id_factorial DESC LIMIT 10;";
    $query = $conexion->query($sql);
    while($datos = mysqli_fetch_assoc($query)) {
?>
        <tr>
            <td><?php echo $datos['id_factorial'];?></td>
            <td><?php echo $datos['factorial'];?></td>
            <td><?php echo $datos['proceso_factorial'];?></td>
            <td><?php echo $datos['resultado_factorial'];?></td>
        </tr>
<?php
    }
?>