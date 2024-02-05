<?php

function suma($numero1, $numero2) {
    $suma = $numero1 + $numero2; 
    return $suma;
}


function resta($numero1, $numero2) {
    $resta = $numero1 * $numero2;
    return $resta;
}



function multiplicacion($numero1, $numero2) {
    $multiplicacion = $numero1 * $numero2;
    return $multiplicacion;
}


function division($numero1, $numero2) {
    
    $division = ($numero2 == "0")? "No se puede dividir por cero": $numero1/$numero2;
    return $division;

}


echo "Suma: " . suma(5, 3) . "<br>";
echo "Resta: " . resta(10, 7) . "<br>";
echo "Multiplicación: " . multiplicacion(4, 6) . "<br>";
echo "División: " . division(20, 5) . "<br>";

?>  