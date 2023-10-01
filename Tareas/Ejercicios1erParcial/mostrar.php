<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    
    <?php
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    
    // Mostrar el nombre en negrita y la ciudad en rojo
    echo "<p><strong>$nombre</strong> vive en <span style='color: red;'>$ciudad</span>.</p>";
    ?>
    
    <a href="6.html">Volver al formulario</a>
</body>
</html>
