<?php

$x = 11;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y =15;

echo "Atribuição após Referencia";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x= 20;

echo "Atribuição após Referencia 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


$nome = "Matheus";

$nome2 =& $nome;


echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "joao";

echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";