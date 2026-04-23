<?php
# min — Encontra o menor valor
function meuMinimoPersonalizado($array) {
    if (empty($array)) {
        return null; // Trata array vazio
    }
    
    $min = $array[0];
    foreach ($array as $valor) {
        if ($valor < $min) {
            $min = $valor;
        }
    }
    return $min;
}

$dados = [118877, 118826, 119974, 228877, 
          228826, 229974, 338877, 338826, 
          339974, 448877, 448826, 449974, 
          340871, 503339, 504822, 503886];
          
echo meuMinimoPersonalizado($dados); // Retorna 1
?>
