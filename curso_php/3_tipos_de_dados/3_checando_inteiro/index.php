<?php

if(is_int(5)) { // true
    echo "è um inteiro 1 <br>";

}


if(is_int("nao e um inteiro")) { // false
    echo "è um inteiro 3 <br>";

}

$a = 10;

if(is_int($a)) { // true
    echo "è um inteiro 3 <br>";

}