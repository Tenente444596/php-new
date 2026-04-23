<?php
#sprintf - Retona uma string formatada
$num = 596;
$location = 'terminal da piracicabana df.';

$format = 'O %2$s contém %1$d onibus.
           É um belo %2$s cheio de %1$d onibus.';
echo sprintf($format, $num, $location);

$num = 753;
$location = 'terminal da pioneira df.';

$format = 'O %2$s contém %1$d onibus.
           É um belo %2$s cheio de %1$d onibus.';
echo sprintf($format, $num, $location);

$num = 565;
$location = 'terminal da urbi mobilidade';

$format = 'O %2$s contém %1$d onibus.
           É um belo %2$s cheio de %1$d onibus.';
echo sprintf($format, $num, $location);

$num = 510;
$location = 'terminal da marechal df';

$format = 'O %2$s contém %1$d onibus.
           É um belo %2$s cheio de %1$d onibus sendo 90 espaçonaves extraterrestres.';
echo sprintf($format, $num, $location);

$num = 473;
$location = 'terminal da bsbus mobilidade';

$format = 'O %2$s contém %1$d onibus.
           É um belo %2$s cheio de %1$d onibus.';
echo sprintf($format, $num, $location);
?>