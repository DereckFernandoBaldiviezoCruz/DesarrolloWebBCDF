<?php
include("conexion.php");
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$CU=$_POST['CU'];
$idcarrera=$_POST['idcarrera'];
$id=$_POST['id'];

$sql="UPDATE alumno set nombres='$nombres',apellidos='$apellidos',CU='$CU') 
WHERE id=$id";

if($con->query($sql)===TRUE){

}
//echo $sql;
?>