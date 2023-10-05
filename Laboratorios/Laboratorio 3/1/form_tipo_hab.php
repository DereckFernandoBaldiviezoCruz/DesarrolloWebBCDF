
<?php include("conexion.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT id,descripcion, numero_camas from  tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create_tipo_hab.php" method="post" enctype="multipart/form-data"
>
        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="nummero_camas">Numero de camas</label>
            <input type="text" name="numero_camas">
        </div>
        <input type="submit" value="Crear">


    </form>

</body>

</html>