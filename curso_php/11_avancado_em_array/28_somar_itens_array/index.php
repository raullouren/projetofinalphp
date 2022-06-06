<?php

$arr = [2, 4, 34, 34.1, 324, 12, 34, "ignorado"];

$soma = array_sum($arr);//ignora oque nao for float ou int

print_r($arr);
echo "<br>";
echo $soma;
echo "<br>";