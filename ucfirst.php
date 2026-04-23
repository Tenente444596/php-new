<?php
#ucfirst — Transforma o primeiro caractere de uma string em maiúsculo
$foo = 'superheroína';
echo ucfirst($foo), PHP_EOL;             

$bar = 'supermilitar';
echo ucfirst($bar), PHP_EOL;            
echo ucfirst(strtolower($bar)), PHP_EOL; 

$foo = 'alureano';
echo ucfirst($foo), PHP_EOL;             

$bar = 'kryptoniano';
echo ucfirst($bar), PHP_EOL;            
echo ucfirst(strtolower($bar)), PHP_EOL; 

?>