<?php
$n = $_GET['n'];
$vector = array($n);
$mayor = $_POST['mayor'];
echo $n;
for($i = 1; $i <= $n; $i++){
    $vector[$i]=$_POST["numero' . $i. '"];
}
for($i = 1; $i <= $n; $i++){
    echo $vector[$i];
}
?>