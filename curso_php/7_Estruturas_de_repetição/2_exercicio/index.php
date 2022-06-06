<?php


$banana = [10, 2, "joao", 3, true, "dois", false, 23, 1.23, "todos", 3.23];

$x = count($banana);
$y = 0;



while($y < $x) {

    if(is_string($banana[$y])){

    echo $banana[$y] . "<br>";
    }

    $y++;
   
}

