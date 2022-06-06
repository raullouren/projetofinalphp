<?php

abstract  class Teste {

    public static function testandoClasse(){

        echo "Este método é de uma classe abstrata <br>";
    }
}

//$t =new Teste; // nao posso instanciar classe abstrata

Teste::testandoClasse();

class Nova extends Teste{

    public function testeABs(){
        echo "Teste método abstrato <br>";
    }
}

$n = new Nova;
$n->testeAbs();