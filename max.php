<?php
# max — Localiza o maior valor
$produtos = [
    ['Celular Samsung Galaxy S26 Ultra 5G, 1TB' => 'A', 'preco' => 13.949,10],
    ['Celular Galaxy A57 5G (256GB)' => 'B', 'preco' => 3.599,10],
    ['Celular Galaxy A56 5G (256GB)' => 'C', 'preco' => 3.514,05],
    ['Celular Galaxy A26 5G (256GB)' => 'D', 'preco' => 1.804,05],
    ['Realme 12 Pro Plus 5G 256GB, 8GB RAM, Tela AMOLED Curva 6,7' => 'E', 'preco' => 2.463,29],
    ['Realme 14 Pro+ 5G Dual Sim 512GB 12GB Ram Com Nfc Tela Curva 6,77' => 'F', 'preco' => 4.199,00],
    ['Placa Mãe Asus TUF Gaming B760M-PLUS II LGA 1700 DDR5' => 'G', 'preco' => 1.800,00],
    ['ASUS O refrigerador de líquido ROG RYUO IV SLC 360 ARGB' => 'H', 'preco' => 4.972,37],
    ['T12000VN0008 Seagate - HD SATA 12TB 7200 rpm IronWolf' => 'I', 'preco' => 4.497,97 ],
    ['SSD Samsung 870 QVO' => 'I', 'preco' => 8.135,00]
];

$maxPreco = array_reduce($produtos, function($max, $item) {
    return ($item['preco'] > $max) ? $item['preco'] : $max;
}, 0);

echo $maxPreco; 


?>