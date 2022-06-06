
<?php

if(5 > 2 || 3 < 4) { // true e true
    echo "A operacao 1 é verdadeira <br>";
}

if(5 > 2 || 30 < 4) { // true e false
    echo "A operacao 2 é verdadeira <br>";
}

if(5 > 20 || 3 < 4) { // false e true
    echo "A operacao 3 é verdadeira <br>";
}

if(5 > 20 || 30 < 4) { // false e false
    echo "A operacao 4 é verdadeira <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;


if($a > $b || $d > $c) { // false e true
    echo "A operacao 5 é verdadeira <br>";
}


if(($a > $b || $d > $c) && $c < $d) { // false e true e true
    echo "A operacao 6 é verdadeira <br>";
}

if(($a > $b && $d < $c) || $c < $d) { //
    echo "A operacao 7 é verdadeira <br>";
}
