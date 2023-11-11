<?php session_start();
if (!isset($_SESSION['usuario'])) {
    include('form_login.html');
     die("No esta autorizado");
}
?>
