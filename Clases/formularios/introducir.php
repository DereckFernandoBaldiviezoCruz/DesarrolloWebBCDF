<?php
$n=$_GET['n'];

echo '<form action="calcular.php" method = "POST">';

for($i=0;$i<$n;$i++)
{
?>
<input type="number" name="numero<?php echo $i?>">

<?php
}
echo'<input type = "hidden" name="n" value = "'.$n.'">';
echo'<input type = "submit" value = "sumar">';
echo"</form>"
?>