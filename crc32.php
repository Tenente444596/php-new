<?php
#crc32 — Calcula polinômio crc32 de uma string
$checksum = crc32("Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!");
printf("%u\n", $checksum);

$checksum = crc32("Maria Ganhou uma roupa de superherói, ela gostou tanto que ganhou superpoderes e é uma superheroína!");
printf("%u\n", $checksum);

$checksum = crc32("Augusto Pinochet é o 1° Tenente da Arma de engenharia da computação, tem superpoderes kryptonianos, é imune a kryptonita e ele é o SuperMilitar!");
printf("%u\n", $checksum);

?>