<?php
include ('pila.php');
$p=new pila();
$valor = $_GET("valor");
$p->insertar($valor);
?>
<meta http-equiv="refresh" content= "4;url=menu_pila.html">