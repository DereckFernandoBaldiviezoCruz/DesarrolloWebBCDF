<?php
// Función para calcular la serie Fibonacci
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Función para calcular el factorial
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Fibonacci y Factorial</title>
</head>
<body>
    <h1>Calculadora Fibonacci y Factorial</h1>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if (is_numeric($numero)) {
            echo "<h2>Resultados:</h2>";
            echo "Fibonacci de $numero: " . fibonacci($numero) . "<br>";
            echo "Factorial de $numero: " . factorial($numero) . "<br>";
        } else {
            echo "<p>Por favor, ingrese un número válido.</p>";
        }
    }
    ?>
</body>
</html>
