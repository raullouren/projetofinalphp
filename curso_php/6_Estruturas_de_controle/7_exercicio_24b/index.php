<?php

$pesobase = 80;

$peso1 = 140;
$peso2 = 34;
$peso3 = 200;

$msg1 = "Esta pesado demais <br>";
$msg2 = "Peso dentro do limite <br>";


echo "1 - ";
if($peso1 > $pesobase) {
    echo $msg1;
} else {
    echo $msg2;
}


echo "2 - ";
if($peso2 > $pesobase) {
    echo $msg1;
} else {
    echo $msg2;
}

echo "3 - ";
if($peso3 > $pesobase) {
    echo $msg1;
} else {
    echo $msg2;
}