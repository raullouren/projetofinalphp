<?php

$arr1 = [];


for($i = 0; $i <=30;$i++){

    array_push($arr1, $i);

}

//print_r($arr1); 



function Arr7($arr3){

    $arr2 = [];

for($j = 0; $j < count($arr3);$j++) {


    if($j >7) {

        array_push($arr2,$j);
    }
}

return $arr2;

} 


$novaArr = arr7($arr1);

print_r($novaArr);