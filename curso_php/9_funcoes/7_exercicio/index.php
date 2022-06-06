<?php

function pessoa($nome,$idade,$genero) {

    if(is_string($nome) && is_int($idade) && is_string($genero)){
        echo "Olá eu sou o $genero $nome e tenho $idade anos <br>";
    } else {
        echo "Ocorreu um erro no preenchimento dos dados <br>";
    }
}

pessoa("Raul", 29, "o");
pessoa(12, 23, 12);
pessoa(true, 12.5, "o");
pessoa("Milena", 24, "a");