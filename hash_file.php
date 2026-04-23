<?php

/* Cria um arquivo com três frases para cálculo de seu hash */
$conteudo = "Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!. " .

            "Maria Ganhou uma roupa de superherói, ela gostou tanto que ganhou superpoderes e é uma superheroína! " .
            
            "Augusto Pinochet é o 1° Tenente da Arma de engenharia da computação, tem superpoderes kryptonianos, é imune a kryptonita e ele é o SuperMilitar!";

file_put_contents('example.txt', $conteudo);

echo hash_file('sha256', 'example.txt');

?>