<?php

echo 5 / 2;
echo "<br>";


if(is_float(5/2)) {
    echo "É float <br>";//uma divisao que acaba transformando um int em um float 
}

echo 2 . 3;
echo "<br>";


if(is_string(2 . 3)) {   // concatenação uniao de 2 numero gerando uma string
    echo "É string <br>"; // uniao de dois numeros entre pontos gera uma string,
    
}


$nome = "Matheus";
$sobrenome = "Battisti";

$nomeCompleto = $nome . " " . $sobrenome; // concatenação unindo espaços e nomes

echo $nomeCompleto;
echo "<br>";
