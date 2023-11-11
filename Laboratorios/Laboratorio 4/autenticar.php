<?php
session_start();

$usuario_correcto = 'admin';
$contrasena_correcta = '123';

if ($_POST['usuario'] != '' && $_POST['contrasena'] != '') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
        $_SESSION['nivel'] = 'autenticado';
        echo 'Autenticado correctamente';
    } else {
        echo 'No autenticado';
    }
} else {
    echo 'Falta el usuario y/o contraseña';
}
?>
