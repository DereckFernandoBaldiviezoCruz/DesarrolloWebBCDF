<?php
require_once("conexion.php");

if (!isset($_SESSION['usuario'])) {
    include('form_login.html');
     die("No esta autorizado");
}


// Consulta SQL para obtener todos los datos de la tabla usuario.
$sql = "SELECT id, usuario, nombrecompleto, nivel FROM usuarios";

$result = $con->query($sql);

// Mostrar la tabla de usuarios.
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Usuario</th><th>Nombre Completo</th><th>Nivel</th><th>Operación</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['usuario']}</td>";
    echo "<td>{$row['nombrecompleto']}</td>";
    echo "<td>"?> <?php if($row['nivel'] == 1) {echo "Administrador"?><?php  } else echo "Usuario"?></td>";<?php
    echo "<td>";
    if ($row['nivel'] == 1) {
        echo "<button onclick=\"javascript:cambiarNivel('{$row['usuario']}', 0)\">Cambiar a Usuario</button>";
    } else {
        echo "<button onclick=\"javascript:cambiarNivel('{$row['usuario']}', 1)\">Cambiar a Administrador</button>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

$con->close();
?>
