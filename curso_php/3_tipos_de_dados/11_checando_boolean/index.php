<?php

$a = true;

if(is_bool($a)) {
    echo "É um boolean 1 <br>";
}

if(is_bool(0)) {
    echo "É um boolean 2 <br>";
}

if(is_bool(false)) {
    echo "É um boolean 3 <br>";
}

if(0 == false) {
    echo "0 é considerado falso <br>";
}

if(0.0 == false) {
    echo "0 é considerado falso <br>";
}