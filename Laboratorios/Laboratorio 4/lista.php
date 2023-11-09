<?php
$datos = [
    ["Nro" => 1, "Apellidos" => "Juan Perez", "Nombres" => "Juan", "Edad" => 25, "Materia" => "SIS-256", "Not" => 83],
    ["Nro" => 2, "Apellidos" => "Ricardo Luna", "Nombres" => "Ricardo", "Edad" => 30, "Materia" => "SIS-258", "Not" => 70],
    ["Nro" => 3, "Apellidos" => "Teresa Tomasa", "Nombres" => "Teresa", "Edad" => 26, "Materia" => "SIS-256", "Not" => 84],
    ["Nro" => 4, "Apellidos" => "Favian Umbre", "Nombres" => "Favian", "Edad" => 24, "Materia" => "SIS-258", "Not" => 70]
];

echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>
