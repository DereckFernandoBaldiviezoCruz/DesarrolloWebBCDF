<?php
if (!isset($_COOKIE['contador']))
{
   setcookie("contador",1,time()+3600*60);
   $contador = 1;

}
else
{

$contador=$_COOKIE['contador']++;
setcookie("contador",$contador+1,time()+3600*60);
}

echo "Esta es la $contador vez que visita este sitio";
?>