<?php

include "PalabraMasLarga.php";

if(isset($_POST["cadena"])){
    $cadena =$_POST["cadena"];
$palabraMasLarga = PalabraMasLarga($cadena);

echo "La palabra mas larga es: ".$palabraMasLarga;
} else {
    echo "No se ha proporcionado una cadena";
}

?>