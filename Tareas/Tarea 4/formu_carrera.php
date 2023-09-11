<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>

    <form action="create_carrera.php" method="post">
        <div>
            <label for="nombre">Carrera</label>
            <input type="text" name="nombres">
        </div>
        <input type="submit" value="Crear">


    </form>

</body>

</html>