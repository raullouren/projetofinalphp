<?php
$frase = "testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseB = "carro, aviao, barco, navio";

$fraseBarray = explode(",", $fraseB);

print_r($fraseBarray);
echo "<br>";

for($i = 0; $i < count($fraseBarray); $i++){

    echo $fraseBarray[$i] . "<br>";
}