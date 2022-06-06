<?php

$velbase = 40;
$velcarro1 = 50;
$velcarro2 = 40;
$velcarro3 = 30;

$msg1 = "Você está dentro da  velocidade ";
$msg2 = "Você está a 40 km/h, tome cuidado";
$msg3 = "Você foi multado por estar acima da velocidade";


if ($velcarro1 > $velbase) {

    echo "Carro 1 - ";
    echo $msg3;
    echo "<br>";

} else if ($velcarro1 == $velbase) {

    echo "Carro 1 - ";
    echo $msg2;
    echo "<br>";

} else {

    echo "Carro 1 - ";
    echo $msg1;
    echo "<br>";
}

//-------------------

if ($velcarro2 > $velbase) {

    echo "Carro 2 - ";
    echo $msg3;
    echo "<br>";

} else if ($velcarro2 == $velbase) {

    echo "Carro 2 - ";
    echo $msg2;
    echo "<br>";

} else {

    echo "Carro 2 - ";
    echo $msg1;
    echo "<br>";
}

//=====================

if ($velcarro3 > $velbase) {

    echo "Carro 3 - ";
    echo $msg3;
    echo "<br>";

} else if ($velcarro3 == $velbase) {

    echo "Carro 3 - ";
    echo $msg2;
    echo "<br>";

} else {

    echo "Carro 3 - ";
    echo $msg1;
    echo "<br>";
}