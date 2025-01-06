<?php

// 3. Problema de Frecuencia de Caracteres
function contarCaracteres($texto) {
    $frecuencia = array();
    
    // Convertir el texto a minúsculas para no diferenciar entre mayúsculas y minúsculas
    $texto = strtolower($texto);
    
    // Recorrer cada carácter
    for ($i = 0; $i < strlen($texto); $i++) {
        $caracter = $texto[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;
}

// Ejemplo de uso:
$texto = "Hola Mundo";
$frecuencia = contarCaracteres($texto);
echo "Texto analizado: " . $texto . "\n";
echo "Frecuencia de caracteres:\n";
foreach ($frecuencia as $caracter => $cantidad) {
    echo "'" . $caracter . "': " . $cantidad . "\n";
}
echo "\n";

?>
