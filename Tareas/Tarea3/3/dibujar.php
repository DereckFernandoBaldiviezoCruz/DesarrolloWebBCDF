<?php
if (isset($_POST["numero"])) {
    $numero = intval($_POST["numero"]);

    echo "<!DOCTYPE html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Tablero de Ajedrez ($numero x $numero)</h1>
        <table border='1'>";

    for ($i = 1; $i <= $numero; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $numero; $j++) {
            $color = ($i + $j) % 2 == 0 ? "white" : "black";
            echo "<td width='50' height='50' style='background-color: $color'></td>";
        }
        echo "</tr>";
    }

    echo "</table></body></html>";
} else {
    echo "Número no especificado.";
}
?>
