<?php

$i = 1;

$c = "variavel teste";

while($i <= 10) {

    echo "$c <br>";
    echo "loop externo $i <br>";


    $j = 1;

    while($j < 5) {

        echo "$c 2 <br>";
        echo "loop internto $j <br>";

        $j++;
    }

    $i++;
    
}