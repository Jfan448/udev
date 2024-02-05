<?php
function clasificarTriangulo($lado1, $lado2, $lado3) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        return "Equilátero"; // Todos los lados son iguales
    } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        return "Isósceles"; // Dos lados son iguales
    } else {
        return "Escaleno"; // Ningún lado es igual
    }
}

// Ejemplos
$lado1 = 5;
$lado2 = 5;
$lado3 = 5;
echo "El triángulo con lados $lado1, $lado2 y $lado3 es " . clasificarTriangulo($lado1, $lado2, $lado3) . "<br>";

$lado1 = 4;
$lado2 = 4;
$lado3 = 6;
echo "El triángulo con lados $lado1, $lado2 y $lado3 es " . clasificarTriangulo($lado1, $lado2, $lado3) . "<br>";

$lado1 = 3;
$lado2 = 4;
$lado3 = 5;
echo "El triángulo con lados $lado1, $lado2 y $lado3 es " . clasificarTriangulo($lado1, $lado2, $lado3) . "<br>";
?>
