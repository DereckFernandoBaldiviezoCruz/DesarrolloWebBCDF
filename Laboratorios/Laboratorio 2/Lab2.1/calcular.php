<?php
$cantidad = $_POST['cantidad'];
$unidad1 = $_POST['unidad1'];
$unidad2 = $_POST['unidad2'];
$resultado = 0;
switch($unidad1){
    case "milimetro":
        switch($unidad2){
            case "centimetro":
                $resultado = $cantidad/10;
                break;
            
            case "decimetro":
                $resultado = $cantidad/100;
                break;
            
            case "metro":
                $resultado = $cantidad/1000;
                break;
            
            case "kilometro":
                $resultado = $cantidad/1000000;
                break;
        }
        break;
    case "centimetro":
        switch($unidad2){
            case "milimetro":
                $resultado = $cantidad*10;
                break;
            case "centimetro":
                $resultado = $cantidad;
                break;
            
            case "decimetro":
                $resultado = $cantidad/10;
                break;
            
            case "metro":
                $resultado = $cantidad/100;
                break;
            
            case "kilometro":
                $resultado = $cantidad/100000;
                break;
        }
        break;
    case "decimetro":
        switch($unidad2){
            case "milimetro":
                $resultado = $cantidad*100;
                break;
            case "centimetro":
                $resultado = $cantidad*10;
                break;
            
            case "decimetro":
                $resultado = $cantidad;
                break;
            
            case "metro":
                $resultado = $cantidad/10;
                break;
            case "kilometro":
                $resultado = $cantidad/1000;
                break;
        }
        break;
    case "metro":
        switch($unidad2){
            case "milimetro":
                $resultado = $cantidad*1000;
                break;
            case "centimetro":
                $resultado = $cantidad*100;
                break;
            
            case "decimetro":
                $resultado = $cantidad*10;
                break;
            
            case "metro":
                $resultado = $cantidad;
                break;
            case "kilometro":
                $resultado = $cantidad/1000;
                break;
        }
        break;
    case "kilometro":
        switch($unidad2){
            case "milimetro":
                $resultado = $cantidad*1000000;
                break;
            case "centimetro":
                $resultado = $cantidad*100000;
                break;
            
            case "decimetro":
                $resultado = $cantidad*10000;
                break;
            
            case "metro":
                $resultado = $cantidad*1000;
                break;
            case "kilometro":
                $resultado = $cantidad;
                break;
        }
        break;
}
echo '<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="resultado1">Resultado: '.$resultado.'</div>';
?>