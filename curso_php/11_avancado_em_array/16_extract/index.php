<?php

$arr = [
"cor" => "vermelho",
"forma" => "irregular",
"material" => "aço"
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";

$pessoa= [
    "nome" => "joao",
    "idade" => 29,
];

echo "$nome <br>";

extract($pessoa);


echo "$nome <br>";
echo "$idade <br>";

