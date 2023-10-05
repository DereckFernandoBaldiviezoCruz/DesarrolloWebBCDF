<?php
$con = new mysqli("localhost:3307", "root", "", "bd_hotel");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>