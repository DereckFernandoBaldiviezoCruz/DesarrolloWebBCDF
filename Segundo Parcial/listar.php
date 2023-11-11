<?php
require_once("conexion.php");
include("autenticar.php");
if (!isset($_SESSION['usuario'])) {
     die("");
}
$nivel = $_SESSION["nivel"];
// Consulta SQL para obtener todos los datos de la tabla usuario.
$sql = "SELECT id, imagen, titulo, autor, anio FROM libros";

$result = $con->query($sql);

// Mostrar la tabla de usuarios.
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Imagen</th><th>Titulo</th><th>Autor</th><th>Año</th><th>Operaciones</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td><img src='images/".$row['imagen']."' width=50px'></td>";
    echo "<td>{$row['titulo']}</td>";
    echo "<td>{$row['autor']}</td>";
    echo "<td>{$row['anio']}</td>";
    echo "<td>"?> <?php if($nivel == 1) {echo "<button>Editar</button> <button>Eliminar</button>"?><?php  }
    else echo ""?></td>";<?php
    echo "<td>";
    
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

$con->close();
?>
