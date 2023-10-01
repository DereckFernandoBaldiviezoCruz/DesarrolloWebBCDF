<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Suma</title>
    <style>
        table {
            border: 1px solid black;
            background-color: green;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Resultado de la Suma</h1>

    <?php
    // Obtener los números enviados por GET
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Calcular la suma
    $suma = $numero1 + $numero2;
    ?>

    <table>
        <tr>
            <th>Número 1</th>
            <th>Número 2</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td><?php echo $numero1; ?></td>
            <td><?php echo $numero2; ?></td>
            <td><?php echo $suma; ?></td>
        </tr>
    </table>

    <a href="7.php">Volver al formulario</a>
</body>
</html>
