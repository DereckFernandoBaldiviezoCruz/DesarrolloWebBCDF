<?php
$n = $_POST['n'];
$vector = array($n);

echo '<form method="post" action="eliminar.php?.$n"';
for($i = 1; $i <= $n; $i++){
    echo '<label for="numero' . $i. '"> Numero '.$i. ':</label>';
    echo '<input type="text" name="numero' . $i. '" <br>';
}
echo '<input type="submit" value="Enviar">';
echo '<div>Ingrese el parametro mayor: </div>
<label for="mayor"></label>
<input type="number" name="mayor">
</div>';
echo '</form>';

?>