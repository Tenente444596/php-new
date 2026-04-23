<?php
// chunk_split — Divide uma string em pedaços menores
$data = 'Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!';

$new_string = chunk_split(base64_encode($data));
echo $new_string, PHP_EOL;

$data = 'Maria Ganhou uma roupa de superherói, ela gostou tanto que ganhou superpoderes e é uma superheroína!';

$new_string = chunk_split(base64_encode($data));
echo $new_string, PHP_EOL;

$data = 'Augusto Pinochet é o 1° Tenente da Arma de engenharia da computação, tem superpoderes kryptonianos, é imune a kryptonita e ele é o SuperMilitar!';

$new_string = chunk_split(base64_encode($data));
echo $new_string, PHP_EOL;

?>