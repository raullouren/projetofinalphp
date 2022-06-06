<?php

$teste = "um";

echo "$teste global 1 <br>";

if(5 > 2) {

    $teste = "dois";
    echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function  funcao(){

    $teste = "tres";

    echo "$teste local <br>";


}

funcao();


function  testandoglobal(){

    global $teste;

    echo "$teste global função <br>";

}

testandoglobal();

echo "$teste global 3 <br>";