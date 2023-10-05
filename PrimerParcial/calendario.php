<?php

$año = $_POST["año"];
$mes = $_POST["mes"];
switch($mes){
    case "Enero": $mes = "01";
    break;
    case "Febrero" : $mes = "02";
    break;
    case "Marzo" : $mes = "03";
    break;
    case "Abril" : $mes = "04";
    break;
    case "Mayo" : $mes = "05";
    break;
    case "Junio" : $mes = "06";
    break;
    case "Julio" : $mes = "07";
    break;
    case "Agosto": $mes = "08";
    break;
    case "Septiembre" : $mes = "09";
    break;
    case "Octubre" : $mes = "10";
    break;
    case "Noviembre" : $mes = "11";
    break;
    case "Diciembre" : $mes = "12";
    break;
}
$fecha = $año."-".$mes."-01";
$fecha2 = $año."-".$mes."-31";
$numeroDiaSemana = date("w", strtotime($fecha));
echo "El día de la semana de $fecha es $numeroDiaSemana";
$numeroDiaSemana2 = date("w", strtotime($fecha2));
echo "El día de la semana de $fecha2 es $numeroDiaSemana2";
echo "<!DOCTYPE html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <table border='1'>";
        $matriz[1]="Lunes";
        $matriz[2]="Martes";
        $matriz[3]="Miercoles";
        $matriz[4]="Jueves";
        $matriz[5]="Viernes";
        $matriz[6]="Sabado";
        $matriz[7]="Domingo";
        $dia = 1;
        if($numeroDiaSemana==0)
        {
            $numeroDiaSemana = 7;
        }
    for ($i = 1; $i <= 7; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 7; $j++) {
            $color1 = "#FDE9D9";
            $color1 = $i % 2 == 0 ? $color1 : "white";  
            if($i == 1){
                $color1 = "#F79646";
                echo "<td width='50' height='30' style='background-color: $color1'>$matriz[$j]</td>";
            }else{
                if($j==$numeroDiaSemana){
                    echo "<td width='50' height='30' style='background-color: $color1'>$dia</td>";
                    $dia++;
                    if($numeroDiaSemana==7){
                        $numeroDiaSemana = 0;
                    }
                    $numeroDiaSemana++;
                }else{
                    echo "<td width='50' height='30' style='background-color: $color1'></td>";
                }
                if($mes == "02"){
                    if($año%4==0)
                    {
                        if($dia == 30)
                        break;
                    }else if($dia == 29)
                    break;
                }
                if($mes == "01"||$mes == "03"||$mes == "05"||$mes == "07"||$mes == "08"||$mes == "10"||$mes == "12"){
                    if($dia == 32){
                        break;
                    }
                }
                if($mes == "04"||$mes == "06"||$mes == "09"||$mes == "11"){
                    if($dia == 31){
                        break;
                    }
                }
            }
            
        }
        if($mes == "02"){
            if($año%4==0)
            {
                if($dia == 30)
                break;
            }else if($dia == 29)
            break;
        }
        if($mes == "01"||$mes == "03"||$mes == "05"||$mes == "07"||$mes == "08"||$mes == "10"||$mes == "12"){
            if($dia == 32){
                break;
            }
        }
        if($mes == "04"||$mes == "06"||$mes == "09"||$mes == "11"){
            if($dia == 31){
                break;
            }
        }
        echo "</tr>";
    }