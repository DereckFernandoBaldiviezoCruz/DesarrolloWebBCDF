<?php

$numeros = range(1, 20);

$numerosPares = array();
$numerosImpares = array();

foreach($numeros as $numero){
    if($numero % 2 == 0){
        $numerosPares[]=$numero;
    } else{
        $numerosImpares[] = $numero;
    }
}

echo "Números Pares:<br>" . implode("<br>", $numerosPares) . "<br>";
echo "Números Impares:<br>" . implode("<br>", $numerosImpares) . "<br>";