<?php
session_start();
include("conexion.php");
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
$password = sha1($_POST['password']);
$sql = "SELECT usuario, password, nivel FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['nivel'] = $fila['nivel'];
    $_SESSION['usuario'] = $fila['usuario'];

    // Devolver un mensaje de éxito
    ?>
    <div class="cabecera" ><h2>Usuario Autenticado, <?php if($_SESSION['nivel'] == 1){ echo "Nivel: Administrador";} else echo "Nivel: Usuario" ?></h2></div>
    <div class="contenido" id="principal">
    </div>
    <div class="preguntas" id="menu">
        <?php 
        include("botones.html");
        ?>
    </div>
    <div class="mensaje" id="mensaje">
        <button class="menu" onclick='cargarBotones("botones.html"),colocarDatos()'>Menu</button>
    </div>
    <?php
} else {
    // Devolver un mensaje de error
    echo "Usuario o contraseña incorrectos";
}
}else{
    echo "No esta autorizado";
}





?>