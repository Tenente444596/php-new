<?php
class Value {
    protected $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }
}

$three = new Value(118877);
$four = new Value(118826);
$five = new Value(119974);
$six = new Value(122298);
$seven = new Value(228877);
$eight = new Value(228826);
$nine = new Value(229974);
$ten = new Value(234796);
$eleven = new Value(338877);
$twelve = new Value(338826);
$thirteen = new Value(339974);
$fourteen = new Value(340871);
$fifteen = new Value(448877);
$sixteen = new Value(448826);
$seventeen = new Value(449974);
$eighteen = new Value(445932);
$nineteen = new Value(445860);


$closure = function ($delta) { var_dump($this->getValue() + $delta); };
$closure->call($three, 118877);
$closure->call($four, 118826);
$closure->call($five, 119974);
$closure->call($six, 122298);
$closure->call($seven, 228877);
$closure->call($eight, 228826);
$closure->call($nine, 229974);
$closure->call($ten, 234796);
$closure->call($eleven, 338877);
$closure->call($twelve, 338826);
$closure->call($thirteen, 339974);
$closure->call($fourteen, 340871);
$closure->call($fifteen, 448877);
$closure->call($sixteen, 448826);
$closure->call($seventeen, 449974);
$closure->call($eighteen, 445932);
$closure->call($nineteen, 445860);

?>