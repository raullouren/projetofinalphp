<?php


$str = "carro - navio - helicoptero - barco - jangada";

$str1 = explode(" - ", $str);

print_r ($str1) ;
echo "<br>";

for($i = 0; $i < count($str1); $i++){

    echo $str1[$i] ."<br>";
}


$fraseB = "carro, aviao, barco, navio";

$fraseBarray = explode(",", $fraseB);

print_r($fraseBarray);
echo "<br>";

for($i = 0; $i < count($fraseBarray); $i++){

    echo $fraseBarray[$i] . "<br>";
}