<?php


$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];


$diff = array_diff($arr1, $arr2);// eh encontrado o valor 1 e 3 de  diferente do array 1 pra o array 2 

print_r($diff);
echo "<br>";

//=====

$diff2 = array_diff($arr2, $arr1);// eh encontrado o valor 4 e 6 do array 2 comparado ao array 1

print_r($diff2);
echo "<br>";

//=====

$arr3 = [4, 6];

$diff3 = array_diff($arr2, $arr1, $arr3);// nao eh encontrado nenhuma diferenca dos arrays anteriores

print_r($diff3);
echo "<br>";


