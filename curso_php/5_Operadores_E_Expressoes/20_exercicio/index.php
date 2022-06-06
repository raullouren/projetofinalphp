<?php

$a = 15;
$b = 5;
$c = "joao";
$d =  "teste";
$e = 1;
$f = 2;
$g = 3;


//comparacao 1
if($a > $b && $c === "joao" ) {

    echo "sucesso 1 <br>";
}
//comparacao 2
if("teste" > $b  &&  $e) {

    echo "sucesso 2 <br>";
}
//comparacao 3
if($f == $g && $b >= $g ) {

    echo "sucesso 3 <br>";
}

//comparacao teste
if(10 > 5 && 1 ) {

    echo "comparacao teste é verdadeira <br>";
}

if(10 > 5 && 0 ) {

    echo "comparacao teste é falsa <br>";
}