<?php
//ordena os valores em ordem crescente ou alfabetica
$arr = [
    "matheys" => 29,
    "pedro" => 18,
    "joaquim" => 14,
    "maria" => 12
];


asort($arr);

print_r($arr);
echo "<br>";

//ordena os valores em ordem decrescente ou inversa da alfabetica

$arr2 = [
    "matheys" => 29,
    "pedro" => 44,
    "joaquim" => 14,
    "maria" => 32
];


arsort($arr2);

print_r($arr2);
echo "<br>";

//=====
//ordena as chaves em ordem crescente ou alfabetica

ksort($arr2);

print_r($arr2);
echo "<br>";


//ordena as chaves em ordem decrescente ou inversa da alfabetica
krsort($arr2);

print_r($arr2);
echo "<br>";