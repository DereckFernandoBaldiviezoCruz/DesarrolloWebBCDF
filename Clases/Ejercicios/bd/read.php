<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php');

    $sql="SELECT id,nombres,apellidos,CU) FROM alumno";

    echo $sql;
    $resultado = $con->query($sql);
    if($resultado->num_rows > 0){
        ?>
        <table>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()){
            ?>
                    <tr>
                        <td><?php echo $row['nombres']; ?></td>
                        <td><?php echo $row['apellidos']; ?></td>
                        <td><?php echo $row['CU']; ?></td>
                        <td><a href="form_update_alumno.php?id=<?php echo $row['id'];?>"></a>Editar</td>
                    </tr>
            <?php } ?>
        </table>


    <?php
    }
    else
    {
        ?><div>No existen registros que mostrar</div>
        <?php
    }
    ?>

</body>
</html>