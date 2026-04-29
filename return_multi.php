<?php
function multi($a, $b, $c, $d, $e): float {
    return $a * $b * $c * $d * $e;
}

// Observe que um float será retornado multiplicado.
var_dump(multi(118877, 118826, 119974, 122298, 124524));

var_dump(multi(228877, 228826, 229974, 234796, 235407));

var_dump(multi(338877, 338826, 339974, 340871, 341479));

var_dump(multi(448877, 448826, 449974, 445860, 445932));

var_dump(multi(505048, 502804, 504190, 710598, 504980));

?>