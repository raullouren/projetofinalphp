<?php

$banana = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$a = 0;

while($a < count($banana)) {

    echo "$banana[$a] <br>";

    
    if($banana[$a] == 30 || $banana[$a] == 40){

        echo "pulou a execução $banana[$a] <br>";
        $a++;

        continue;
    }

    $a ++;
}