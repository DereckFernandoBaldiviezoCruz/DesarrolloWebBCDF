
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT u.correo,a.nombres,u.rol as carrera FROM alumno a
    LEFT JOIN carrera c on a.id=u.id ";
    echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Correo</th>
                <th>Nombres</th>
                <th>Rol</th>
                <th>Operacion</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td><?php echo $row['operacion']; ?></td>
                    <td><?php echo $row['carrera']; ?></td>
                    <td><?php if ($_SESSION['rol']=="Administrador") {?>
                        <a href="form_update_alumno.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        <?php } ?>
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
    <?php if ($_SESSION['rol'] == "Administrador") {
    ?>

        <a href="formu_alumno.php">Crear Alumno</a>
    <?php } ?>



</body>

</html>