

<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion_habitacion.php");
    $id=$_GET['id'];
    $sql="SELECT nro,bano_privado,espacio,precio,id_tipo_habitacion from habitacion where id=$id";
    $sql1 = "SELECT id,descripcion from  tipo_habitacion";
    $sql2 = "SELECT fotografia FROM fotos_habitacion WHERE id_habitacion = $id";
    $resultado2 = $con->query($sql2);
    $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    $row_fotografia = $resultado2->fetch_assoc();
    
    ?>
    <form action="update_habitacion.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nro">Numero</label>
            <input type="text" name="nro" value="<?php echo $row['nro']?>">
        </div>
        <div>
            <label for="bano_privado">Baño Privado</label>
            <input type="text" name="bano_privado" value="<?php echo $row['bano_privado']?>">
        </div>
        <div>
            <label for="espacio">Espacio</label>
            <input type="text" name="espacio" value="<?php echo $row['espacio']?>">
        </div>
        <div>
            <label for="Precio">Precio</label>
            <input type="text" name="precio" value="<?php echo $row['precio']?>">
        </div>
        <div>
        <label for="id_tipo_habitacion">Tipo de Habitacion</label>
            <select name="id_tipo_habitacion">
                <?php while ($row_tipo = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_tipo['id'] ?>" 
                    <?php echo $row_tipo['id']==$row['id_tipo_habitacion']?"selected":"";  ?>     ><?php echo $row_tipo['descripcion'] ?></option>


                <?php } ?>

            </select>
        </div>
        <div>
            <img src="images/<?php echo $row_fotografia['fotografia'] ?>" width="100px">
        </div>
        <div>
            <label for="fotografia">Fotografia</label>
            <input type="file" name="fotografia">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>