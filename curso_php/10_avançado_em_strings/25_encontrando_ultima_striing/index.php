<?php

$str = "testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");

echo "$palavra <br>";


$palavra2 =strrpos($str, "teste");

echo "$palavra2 <br>";


if(strrpos($str, "java") === false) {

    echo "A palavra Java nao foi encontrada <br>";

}


$p = substr($str, strpos($str, "teste"), 5);

echo "$p <br>";