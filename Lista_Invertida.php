<?php

// 1. Problema de Lista Invertida
function invertirLista($array) {
    $longitud = count($array);
    $arrayInvertido = array();
    
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $arrayInvertido[] = $array[$i];
    }
    
    return $arrayInvertido;
}

// Ejemplo de uso:
$numeros = [1, 2, 3, 4, 5];
$resultado = invertirLista($numeros);
echo "Lista original: " . implode(", ", $numeros) . "\n";
echo "Lista invertida: " . implode(", ", $resultado) . "\n\n";

?>
