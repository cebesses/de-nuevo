<?php
$inventario = ["manzanas" => 50, "peras" => 30, "naranjas" => 0, "uvas" => 15];
array_walk($inventario, fn($c, $p) => print "$p: $c unidades<br>");
$inventario["mangos"] = 20;
$inventario["peras"] += 10;
echo isset($inventario["kiwis"]) ? "kiwis existe<br>" : "kiwis no existe<br>";
echo "total: " . array_sum($inventario) . "<hr>";

$empleados = [
    ["nombre" => "sofia", "depto" => "ventas", "salario" => 2500000],
    ["nombre" => "pedro", "depto" => "sistemas", "salario" => 4000000],
    ["nombre" => "laura", "depto" => "ventas", "salario" => 2800000],
    ["nombre" => "andres", "depto" => "sistemas", "salario" => 4500000],
    ["nombre" => "julia", "depto" => "recursos", "salario" => 3000000],
];

$pordepto = $totales = [];
foreach ($empleados as $e) {
    $pordepto[$e["depto"]][] = $e["nombre"];
    $totales[$e["depto"]][] = $e["salario"];
}

foreach ($pordepto as $d => $n) {
    echo "$d: " . implode(",", $n) . " | promedio: " . (array_sum($totales[$d])/count($totales[$d])) . "<br>";
}
uksort($totales, fn($a, $b) => array_sum($totales[$b]) <=> array_sum($totales[$a]));
echo "mayor nomina: " . array_key_first($totales);