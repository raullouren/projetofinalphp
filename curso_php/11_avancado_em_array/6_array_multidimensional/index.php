<?php

$arr = [
    [1, 2, 3],
    [2, 4, 6]
];


print_r($arr);
echo "<br>";

echo  $arr[0][1] . "<br>"; // acessando primeiro array, segundo elemento
echo  $arr[1][2] ."<br>"; // acessando segundo array, ultimo elemtno 

echo count($arr) . "<br>";
echo count($arr[0]) . "<br>";


