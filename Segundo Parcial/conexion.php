<?php
$con = new mysqli("localhost:3307", "root", "", "bd_biblioteca");//Solo es localhost, en mi maquina el puerto estaba ocupado por eso uso el 3307
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>