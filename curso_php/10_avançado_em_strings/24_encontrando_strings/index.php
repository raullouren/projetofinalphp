<?php

$str = "Estamos testando o metodo strpos, com o strpos podemos encntrar strings";

$testeEncontrar =strpos($str, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar2 =strpos($str, "Java");

echo $testeEncontrar2 . "<br>";


if($testeEncontrar2 === false) {

    echo "Palavra nao encontrada <br>";
}

$palavra = "com";

$testeEncontrar2 =strpos($str, $palavra);

echo $testeEncontrar2 . "<br>";

$palavra3 = "to";

$testeEncontrar3 =strpos($str, $palavra3);

echo $testeEncontrar3 . "<br>";