<?php


function numeros($num) {

    if($num % 2  != 0){
        echo "O numero $num é impar<br>";  
    } else {
        echo "O numero $num é par <br>";
    }
}

numeros(13);
numeros(40);
numeros(11);
