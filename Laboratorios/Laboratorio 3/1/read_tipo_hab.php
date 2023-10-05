<?php include('conexion.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
    $sql = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Descripcion</th>
                <th>Numero de Camas</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                    <td>
                        <a href="form_update_tipo_hab.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete_tipo_hab.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        <?php } ?>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <div><a href="form_tipo_hab.php">Crear Habitacion</a></div>

    
    <?php 
    ?>

</body>

</html>