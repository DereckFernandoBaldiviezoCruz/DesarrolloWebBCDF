<?php session_start();

$a=$_SESSION['a'];
$b=$_SESSION['b'];

class Calculadora{

    private $a;
    private $b;
    public function sumar($a, $b){
        $resultado = $a + $b;
        return $resultado;
    }
    public function restar($a, $b){
        return $a - $b;
    }
    public function multiplicar($a, $b){
        return $a * $b;
    }
    public function dividir($a, $b){
        return $a / $b;
    }
}
$operacion = $_POST['operacion'];
if ($operacion == "sumar") {
    $resultado = $a + $b;
    echo $resultado;
}
if ($operacion == "restar") {
    $resultado = $a - $b;
    echo $resultado;
}
if ($operacion == "multiplicar") {
    $resultado = $a * $b;
    echo $resultado;
}
if ($operacion == "dividir") {
    $resultado = $a / $b;
    echo $resultado;
}


