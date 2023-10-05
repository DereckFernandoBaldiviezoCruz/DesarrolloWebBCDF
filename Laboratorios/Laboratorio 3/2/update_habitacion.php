<?php
include("conexion_habitacion.php");
$nro=$_POST['nro'];
$bano_privado=$_POST['bano_privado'];
$espacio=$_POST['espacio'];
$precio=$_POST["precio"];
$id_tipo_habitacion=$_POST["id_tipo_habitacion"];
$id=$_POST['id'];
if (isset($_FILES['fotografia'])){
    $archivo_original=$_FILES['fotografia']['name'];
    $arreglo=explode(".",$archivo_original);
    $extension=$arreglo[1];
    $fotografia=uniqid().'.'.$extension;
    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);
    $sql="UPDATE  habitacion set nro='$nro',id_tipo_habitacion='$id_tipo_habitacion',bano_privado='$bano_privado', precio = '$precio',
espacio = '$espacio' WHERE  id=$id ";
    $sql2="INSERT INTO fotos_habitacion (id_habitacion, fotografia) VALUES ('$id', '$fotografia')";
}else{
    $sql="UPDATE  habitacion set nro='$nro',id_tipo_habitacion='$id_tipo_habitacion',bano_privado='$bano_privado', precio = '$precio', 
espacio = '$espacio' WHERE  id=$id ";
}


 //echo $sql;
 if ($con->query($sql) === TRUE && $con->query($sql2) === TRUE) {
    echo "Se actualizó el registro correctamente";
} else {
    echo "Error en SQL 1: " . $sql . "<br>" . $con->error;
    echo "Error en SQL 2: " . $sql2 . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read_habitacion.php" />


