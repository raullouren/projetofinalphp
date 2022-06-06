<?php

$arr = [
    [1, 2, 3, 4],
    [6, 7, 8, 9],
    [21, 21, 23 ,24],
];


for($i = 0;$i < count($arr); $i++) {

  // imprimindo array

  echo "imprimindo array externo: " . ($i + 1) . "<br>";
    
  // imprimindo o array interno

  for($j = 0; $j < count($arr[$i]); $j++) {

      echo $arr[$i][$j]. "<br>";
  }

}