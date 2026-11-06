<?php
$campos = ['nombre', 'correo', 'edad', 'curso', 'modalidad'];
foreach ($campos as $campo) {
    if (empty($_POST[$campo])) {
        exit("manito le falta  " . ucfirst($campo));
    }
}
echo "inscripcion correctamente <br>";  
foreach ($_POST as $clave => $valor) {
    echo ucfirst($clave) . ": " . htmlspecialchars($valor) . "<br>";
}
?>