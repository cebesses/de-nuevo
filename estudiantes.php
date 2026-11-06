<?php
$estudiantes = [
    "ana"    => ["matematicas" => 4.5, "ciencias" => 3.8, "ingles" => 4.2],
    "luis"   => ["matematicas" => 3.0, "ciencias" => 2.8, "ingles" => 3.5],
    "marta"  => ["matematicas" => 5.0, "ciencias" => 4.7, "ingles" => 4.9],
    "carlos" => ["matematicas" => 2.5, "ciencias" => 3.2, "ingles" => 2.9],
];

$proms = array_map(fn($m) => array_sum($m) / count($m), $estudiantes);
foreach ($proms as $n => $p) 
    echo "$n: " . round($p,2) . " (" . ($p >= 3 ? "aprobado" : "reprobado") . ")<br>";

echo "mejor: " . array_keys($proms, max($proms))[0] . " | peor: " . array_keys($proms, min($proms))[0] . "<hr>";

foreach (array_keys(reset($estudiantes)) as $mat) {
    $notas = array_column($estudiantes, $mat);
    echo "$mat: " . round(array_sum($notas)/count($notas), 2) . "<br>";
}