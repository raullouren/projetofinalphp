<?php

$a = 10;

$b = 15;

function  testandoEscopo() {

    $a = 5;

    global $b;

    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "Escopo local de A: $a <br>";

    echo "escopo global na funcao de B: $b <br>";

    echo "Escopo localstatic de C: $c <br>";
}

echo "escopo global de A: $a <br>";
echo "escopo global de B: $b <br>";


testandoEscopo();

echo "escopo global de B 2: $b <br>";

testandoEscopo();