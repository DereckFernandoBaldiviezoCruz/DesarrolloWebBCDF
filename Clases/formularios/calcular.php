<?php
$n=$_POST['n'];
$suma=0;
for($i=0;$i<$n;$i++)
{
$suma +=$POST['numero'.$i];
}

echo "El resultado de la suma es: ".$suma;
?>