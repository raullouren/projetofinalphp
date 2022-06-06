<?php

$str = " (((oi))";





function contando($str){

    $a = 0;
    $b = 0;

for($i = 0; $i < strlen($str); $i++) {

    if($str[$i] === ")") {

        $a++;
    }

    if($str[$i] === "(") {

        $b++;
    }

    
    
    }
    if($a === $b){

        echo 1; 

    } else {

         echo 0;
    }

    return;

   

}

contando($str);

