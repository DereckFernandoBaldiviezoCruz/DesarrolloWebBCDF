<?php
class Examen {
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }

    public function cruzar() {
        $cruzadas = $this->buscarLetraComun();
        
        if ($cruzadas === false) {
            echo "No existen letras comunes.";
            return;
        }

        echo "<table border='1'>";
        echo "<tr>";
        for ($i = 0; $i < strlen($this->cadena1); $i++) {
            echo "<td>{$this->cadena1[$i]}</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = 0; $i < strlen($this->cadena2); $i++) {
            if ($i === $cruzadas) {
                echo "<td>{$this->cadena2[$i]}</td>";
            } else {
                echo "<td>-</td>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }

    private function buscarLetraComun() {
        $cadena1 = strtolower($this->cadena1);
        $cadena2 = strtolower($this->cadena2);

        for ($i = 0; $i < strlen($cadena1); $i++) {
            for ($j = 0; $j < strlen($cadena2); $j++) {
                if ($cadena1[$i] === $cadena2[$j]) {
                    return $i;
                }
            }
        }

        return false;
    }
}

$cadena1 = "Desarrollo";
$cadena2 = "Web";

$examen = new Examen($cadena1, $cadena2);
$examen->cruzar();
?>
