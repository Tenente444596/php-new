<?php
function calculateAverage($arr) {
    if (count($arr) == 0) return 0; // Evita divisão por zero
    return array_sum($arr) / count($arr);
}

$notas = [10, 10, 8.3, 9.2, 10, 10, 10];
$notas = [10, 7.35, 9.0, 10, 10, 8.0, 10, 9.6];
$notas = [10, 7.0, 10, 10];
$notas = [10, 10, 10, 10];
echo calculateAverage($notas);
?>