<?php session_start();
$a=$_GET['a'];
$b=$_GET['b'];


echo '<form action="calculadora.php" method="POST">';
?>
        <label for="operacion">Operacion</label>
        <input type="submit" name="operacion" value="sumar">
        <input type="submit" name="operacion" value="restar">
        <input type="submit" name="operacion" value="multiplicar">
        <input type="submit" name="operacion" value="dividir">
<?php
$_SESSION['a']=$a;
$_SESSION['b']=$b;
echo "</form>";
?>