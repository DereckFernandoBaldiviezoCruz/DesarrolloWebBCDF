<?php
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$CU=$_POST['CU'];
$idcarrera=$_POST['idcarrera'];

$sql="INSERT INTO alumnos(nombres,apellidos,cu,idcarrera) values
('$nombres','$apellidos','$CU') ";
//echo $sql;
?>