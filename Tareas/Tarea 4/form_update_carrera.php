<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql = "SELECT nombre from  carrera where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update_carrera.php" method="post">

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']?>" size="100">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>