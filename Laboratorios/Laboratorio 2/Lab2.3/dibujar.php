<?php

    $filas = $_POST["filas"];
    $columnas = $_POST['columnas'];
    $color = $_POST['color'];

    echo "<!DOCTYPE html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Tablero de  ($filas x $columnas)</h1>
        <table border='1'>";

    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            $color1 = ($i + $j) % 2 == 0 ? $color : "white";
            echo "<td width='50' height='50' style='background-color: $color1'></td>";
        }
        echo "</tr>";
    }

?>
