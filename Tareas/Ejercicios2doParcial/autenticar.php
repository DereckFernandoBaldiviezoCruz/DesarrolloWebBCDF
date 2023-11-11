<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);

$sql = "SELECT usuario, password, nivel FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['usuario'] = $fila['usuario'];

    // Devolver un mensaje de éxito
    
    echo "Inicio de sesión exitoso";
    include("listar.php");
} else {
    // Devolver un mensaje de error
    echo "Usuario o contraseña incorrectos";
}
?>
