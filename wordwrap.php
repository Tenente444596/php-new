<?php
#wordwrap — Quebra uma string em um dado número de caracteres
$text = "Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;

$text = "Maria Ganhou uma roupa de superherói, ela gostou tanto que ganhou superpoderes e é uma superheroína!";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;

$text = "Augusto Pinochet é o 1° Tenente da Arma de engenharia da computação, tem superpoderes kryptonianos, é imune a kryptonita e ele é o SuperMilitar!";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;

?>