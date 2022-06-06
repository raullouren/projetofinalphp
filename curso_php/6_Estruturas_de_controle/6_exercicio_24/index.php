<?php

$string = "parede";
$int = 12;
$boolean = true;

$positivo = "É um inteiro <br>";
$negativo = "Não é um inteiro <br>";

// 1
echo "1 - ";
if(is_int($string)){
    echo $positivo;
} else {
    echo $negativo;
}

// 2
echo "2 - ";
if(is_int($int)){
    echo $positivo;
} else {
    echo $negativo;
}

//3
echo "3 - ";
if(is_int($boolean)){
    echo $positivo;
} else {
    echo $negativo;
}