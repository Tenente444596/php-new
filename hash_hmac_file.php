<?php
$key = 'secret';
//hash_hmac_file — Gera um valor hash com chave usando o método HMAC e o conteúdo de um arquivo fornecido
// Frase 1
file_put_contents('frase1.txt', 'The quick brown fox jumped over the lazy dog.');
echo "Hash 1: " . hash_hmac_file('sha256', 'frase1.txt', $key) . "\n";

// Frase 2
file_put_contents('frase2.txt', 'PHP é uma linguagem de programação versátil.');
echo "Hash 2: " . hash_hmac_file('sha256', 'frase2.txt', $key) . "\n";

// Frase 3
file_put_contents('frase3.txt', 'Segurança de dados é prioridade no desenvolvimento.');
echo "Hash 3: " . hash_hmac_file('sha256', 'frase3.txt', $key) . "\n";

// Frase 4
file_put_contents('frase4.txt', 'Maria Tinha Um Pequeno Porco e Ela AMAVA-O Tanto!.');
echo "Hash 4: " . hash_hmac_file('sha256', 'frase1.txt', $key) . "\n";

// Frase 5
file_put_contents('frase5.txt', 'Maria Ganhou uma roupa de superherói, ela gostou tanto que ganhou superpoderes e é uma superheroína!.');
echo "Hash 5: " . hash_hmac_file('sha256', 'frase2.txt', $key) . "\n";

// Frase 6
file_put_contents('frase6.txt', 'Augusto Pinochet é o 1° Tenente da Arma de engenharia da computação, tem superpoderes kryptonianos, é imune a kryptonita e ele é o SuperMilitar!.');
echo "Hash 6: " . hash_hmac_file('sha256', 'frase3.txt', $key) . "\n";

?>
