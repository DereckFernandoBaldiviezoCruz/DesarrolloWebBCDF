<?php include("conexion.php");

$sql = "SELECT imagen FROM libros";
$resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            ?>

            <button class="imag"><img src="images/<?php echo $row['imagen']; ?>" onclick="mostrarImagen('<?php echo $row['imagen']; ?>')" width='50px' height="75px"></button>
            <?php
    }
} else {
    echo "No exisstes registros que mostrar";
}

