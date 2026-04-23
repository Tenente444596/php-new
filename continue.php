<?php

#continue é usado em estruturas de repetição para pular o restante da iteração atual do laço,
#e continuar a execução na validação da condição e depois no início da próxima iteração. 

$array = ['118877', '118826', '119974', '122238', 
          '228877', '228826', '229974', '234796', 
          '338877', '338826', '339974', '340874', 
          '448877', '448826', '449974', '445860', 
          '504955', '504742', '502677', '500399',];

foreach ($array as $chave => $valor) {
    if (!($chave % 2)) { // pula membros com chaves pares
        continue;
    }
    echo $valor . "\n";
}
?>