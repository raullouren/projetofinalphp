<?php

$arr = [-2,10,4]; 

sort($arr);




function arraycontando($arr){
    $contando = 0;
    $a1 = max($arr);
    $a2 = min($arr);


for($i = 0; $i < count($arr); $i ++){

  
    $contando++;


}
 $soma = $a1 - $a2 - $contando;


 echo $soma;




}

arraycontando($arr);