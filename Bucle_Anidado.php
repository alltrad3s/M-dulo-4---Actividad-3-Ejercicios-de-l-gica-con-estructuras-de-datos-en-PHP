<?php

// 4. Problema de Bucle Anidado (Pirámide de asteriscos)
function imprimirPiramide($niveles) {
    for ($i = 1; $i <= $niveles; $i++) {
        // Imprimir espacios
        for ($j = 1; $j <= $niveles - $i; $j++) {
            echo " ";
        }
        
        // Imprimir asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        
        echo "\n";
    }
}

// Ejemplo de uso:
echo "Pirámide de 5 niveles:\n";
imprimirPiramide(5);

?>
