<?php

if(isset($_POST["cadena"])){
    $cadena = $_POST["cadena"];
    $cadenaInvertida = strrev($cadena);
    
    echo "<!DOCTYPE html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Cadena Invertida</h1><p>Cadena original: $cadena</p>
        <p>Cadena invertida: $cadenaInvertida</p>
    </body>
    </html>";
} else {
    echo "Cadena invalida.";
}
?>