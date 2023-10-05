<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div>
        <form action="read_habitacion.php" method="GET">
        <div>
            <label for="buscar">buscar</label>
            <input type="text" name="buscar" >
            <input type="submit" value="Buscar">
        </div>
        </form>
    </div>
    <?php include('conexion_habitacion.php');
    $sql = "SELECT h.id,nro,bano_privado,espacio,precio,t.descripcion as tipo_habitacion, f.fotografia as fotos_habitacion 
    FROM habitacion h   LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion=t.id LEFT JOIN fotos_habitacion f on f.id_habitacion = h.id ";
    if (isset($_GET['buscar']))
    {
        $buscar=$_GET['buscar'];
        $sql .=" WHERE descripcion like '%$buscar%' ";
    }

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
                <th>Numero</th>
                <th>Baño Privado</th>
                <th>Espacio</th>
                <th>Precio</th>
                <th>Tipo de Habitacion</th>
                <th>Fotografia</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nro']; ?></td>
                    <td><?php if($row['bano_privado']==1)echo "Si"; 
                    else echo "No"?></td>
                    <td><?php echo $row['espacio']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['tipo_habitacion']; ?></td>
                    <td><img src="images/<?php echo $row['fotos_habitacion'];  ?>" width="100px" ></td>
                    <td>
                        <a href="form_update_habitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete_habitacion.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                        <?php } ?>
                    </td>

                </tr>

            <?php } ?>
        </table>

    <?php

    ?>
        <a href="formu_alumno.php">Crear Habitacion</a>



</body>

</html>