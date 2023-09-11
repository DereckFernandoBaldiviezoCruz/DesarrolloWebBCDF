<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php');
    $id=$_GET['id'];
    $sql="SELECT id,nombre FROM carrera";
    $sql1="SELECT nombres,apellidos,cu FROM alumno where id=$id";
    $resultado->$con->query($sql1);
    $resultado1 = $con->query($sql);
    $row = $resultado->fletch_assoc();
    ?>

    <form action="create.php" method="post">
        <div>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?php echo $row['nombres']?>">
        </div>
        <div>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"value="<?php echo $row['apellidos']?>">
        </div>
        <div>
    </div>
        <label for="CU">CU</label>
        <input type="text" name="CU"value="<?php echo $row['CU']?>">
        </div>
    </div>
        <input type="hiden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">
    </form>
</body>
</html>