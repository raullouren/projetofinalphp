<?php

$arr = [];

for($i = 10; $i < 21;$i++) {

    array_push($arr, $i);

} 

for($i = 0; $i < count($arr); $i++){

    if($arr[$i] % 2 != 0){

        echo $arr[$i];
        echo "<br>";
    }
}