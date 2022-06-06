<?php

echo "testando texto de aspas duplas <br>";
echo 'testando texto de aspas simples <br>'; 
echo "Ele disse: 'Olá!' <br>"; // aspas simples dentro de aspas dulpas NAO da erro
echo "Ele disse: Olá! <br>"; // aspas duplas dentro de aspas duplas da erro
echo 'Ele disse: "Olá!" <br>'; // aspas  duplas dentro de aspas simpels NAO da erro 

 
$idade = 15;

echo "Ele tem $idade anos <br>"; // aspas duplas imprimem variaveis
echo 'Ele tem $idade anos <br>'; // aspas simples nao imprime m variaveis

