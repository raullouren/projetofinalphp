<?php

$a = "teste";
$b = 12.8;

if(is_float($a)) {
    echo "É float! 1 <br>";
    
}

if(is_float($b)) {
    echo "É float! 2 <br>";
    
}

if(is_float(1.23)) {
    echo "É float 3! <br>";
    
}

if(is_float(teste)) {
    echo "É float 4! <br>";
    
}