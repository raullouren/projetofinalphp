<?php

$motor = "1.0";
$cor = "prata";
$marca = "VW";
$modelo = "GOL";
$portas = 4;


$arr = compact("motor", "cor", "marca", "modelo", "portas");


print_r($arr);
echo "<br>";


foreach($arr as $car => $val) {

    echo "$car : $val";
    echo "<br>";

  
}

