<?php session_start();

include("conexion.php");
$correo=$_POST['correo'];
$password=sha1($_POST['password']);
$sql="SELECT nombre,correo,rol from usuario WHERE correo='$correo' and password='$password'";

$resultado=$con->query($sql);
if($resultado->num_query($sql)){
    $fila=$resultado->fetch_assoc();
    $_SESSION['nombre']=$fila['nombre'];
    $_SESSION['correo']=$fila['correo'];
    $_SESSION['rol']=$fila['rol'];
    header("Location:read.php");
}
else
{?>
    
}