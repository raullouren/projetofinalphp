<?php

$n1 = 60;
$n2 = 5;
$n3 = 12;
$st1 = "doido";

$msg1 = "É maior que 100 <br>";
$msg2 = "É menor que 100 <br>";
$msg3 = "Não é um numero <br>";



if(is_int($n1) || is_float($n1)){

    $mult1 = $n1 * 2;
    if($mult1 > 100) {
        echo "1 - ";
        echo $msg1;
    } else {
        echo "1 - ";
        echo $msg2;
    }
}

//-------------------------


if(is_int($n2) || is_float($n2)){

    
    $mult2 = $n2 * 2;
    $mult2 += 200;

    if($mult2 > 100) {
        echo "2 - ";
        echo $msg1;
    } else {
        echo "2 - ";
        echo $msg2;
    }
}

//---------------------------

if(is_int($n3) || is_float($n3)){

    $mult3 = $n3 * 2;
    if($mult3 > 100) {
        echo "3 - ";
        echo $msg1;
    } else {
        echo "3 - ";
        echo $msg2;
    }
}

//----------------------------

if(is_int($st1) || is_float($st1)){

    $mult4 = $st1 * 2;

    if($mult4 > 100) {
        echo "4 - ";
        echo $msg1;
    } else {
        echo "4 - ";
        echo $msg2;
    }
} else {

    echo "4 - ";
    echo $msg3;
}

