<?php
session_start();

class Cola {
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

if (!isset($_SESSION['cola'])) {
    // Crear una nueva cola al inicio de la sesión
    $_SESSION['cola'] = new Cola('Normal');
}

$cola = $_SESSION['cola'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['insertarDelante'])) {
        $elemento = $_POST['elemento'];
        $cola->insertarDelante($elemento);
    } elseif (isset($_POST['insertarDetras'])) {
        $elemento = $_POST['elemento'];
        $cola->insertarDetras($elemento);
    } elseif (isset($_POST['eliminar'])) {
        $cola->eliminar();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cola PHP</title>
</head>
<body>
    <h1>Cola PHP</h1>
    <h2>Cola de Tipo: <?php echo $cola->getTipo(); ?></h2>

    <form action="" method="post">
        <label for="elemento">Elemento:</label>
        <input type="text" name="elemento" id="elemento">
        <input type="submit" name="insertarDelante" value="Insertar Delante">
        <input type="submit" name="insertarDetras" value="Insertar Detras">
        <input type="submit" name="eliminar" value="Eliminar">
    </form>

    <h2>Cola Actual:</h2>
    <pre><?php print_r($cola->mostrar()); ?></pre>
</body>
</html>
