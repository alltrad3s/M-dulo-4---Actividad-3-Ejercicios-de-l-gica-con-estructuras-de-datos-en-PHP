<?php

// 2. Problema de Suma de Números Pares
function sumarPares($array) {
    $suma = 0;
    
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    
    return $suma;
}

// Ejemplo de uso:
$numeros = [1, 2, 3, 4, 5, 6, 8, 10];
$sumaPares = sumarPares($numeros);
echo "Array de números: " . implode(", ", $numeros) . "\n";
echo "Suma de números pares: " . $sumaPares . "\n\n";

?>
