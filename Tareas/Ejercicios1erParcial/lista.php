<?php
session_start();

class Lista {
    private $tipo;
    private $elementos;

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertarDelante($elemento) {
        array_unshift($this->elementos, $elemento);
    }

    public function insertarDetras($elemento) {
        $this->elementos[] = $elemento;
    }

    public function eliminar() {
        if (!empty($this->elementos)) {
            return array_shift($this->elementos);
        } else {
            return null;
        }
    }

    public function mostrar() {
        return $this->elementos;
    }

    public function getTipo() {
        return $this->tipo;
    }
}

if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = new Lista('Normal');
}

$lista = $_SESSION['lista'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['insertarDelante'])) {
        $elemento = $_POST['elemento'];
        $lista->insertarDelante($elemento);
    } elseif (isset($_POST['insertarDetras'])) {
        $elemento = $_POST['elemento'];
        $lista->insertarDetras($elemento);
    } elseif (isset($_POST['eliminar'])) {
        $lista->eliminar();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista PHP</title>
</head>
<body>
    <h1>Lista PHP</h1>
    <h2>Lista de Tipo: <?php echo $lista->getTipo(); ?></h2>

    <form action="" method="post">
        <label for="elemento">Elemento:</label>
        <input type="text" name="elemento" id="elemento">
        <input type="submit" name="insertarDelante" value="Insertar Delante">
        <input type="submit" name="insertarDetras" value="Insertar Detras">
        <input type="submit" name="eliminar" value="Eliminar">
    </form>

    <h2>Lista Actual:</h2>
    <pre><?php print_r($lista->mostrar()); ?></pre>
</body>
</html>
