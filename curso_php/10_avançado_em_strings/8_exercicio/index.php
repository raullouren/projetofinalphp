<?php

$str = " ((oi)))";





function contando($str){

    $a = 0;

for($i = 0; $i < strlen($str); $i++) {

    if($str[$i] === ")") {

        $a++;
    }
    
    
    }
return "o numero de letras a's é $a <br>";
    
}




echo contando($str);


// ou fora de uma funçao


$a = 0;

for($i = 0; $i < strlen($str); $i++) {

    if($str[$i] === "a") {

        $a++;
    }

}

echo "o numero de letras a's é $a <br>";

