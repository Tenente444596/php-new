<?php
#similar_text — Calcula a similaridade entre duas strings
$sim = similar_text('Disco Voador', 'Espaçonave extraterrestre', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Superheroína', 'Supermilitar', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Nave Alienigina', 'OVNI', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Supermulher', 'Superhomem', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Computador', 'Servidor(infomartica)', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Visão de calor', 'Visão de raio X', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Micro-ônibus articulado', 'Espaçonave extraterrestre(ônibus articulado)', $perc);
echo "similarity: $sim ($perc %)\n";

$sim = similar_text('Alureano', 'Kryptoniano', $perc);
echo "similarity: $sim ($perc %)\n";
?>