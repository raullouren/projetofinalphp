<?php

class Pessoa {

    public $nome;
    public $idade;

    function andar($m){

        echo "e ele andou $m até agora! <br>";

    }


}

$matheus = new Pessoa;
$raul =  new Pessoa;

$matheus->nome = "Matheus";
$raul->nome = "Raul";

$matheus->idade = 29;
$raul->idade = 29;


echo "O nome dele é $matheus->nome e tem $matheus->idade anos <br>";
$matheus->andar(57);


echo "O nome dele é $raul->nome e tem $raul->idade anos <br>";
$raul->andar(34);


