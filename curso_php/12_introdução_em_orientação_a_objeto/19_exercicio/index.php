<?php

class Cachorro{

    public $patas;
    public $cor;
    public $raca;
    public $idade;
    public $nome;


    public function __construct($patas, $cor, $raca, $idade, $nome){

        $this->patas = $patas;
        $this->cor = $cor;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->nome = $nome;
    }



    
}


$babo = new Cachorro (4, "caramelo e branco", "Lhasa", 6, "Barney");
$ozzy =  new Cachorro (4, "cinza", "York", 12, "Ozyy");


echo "O $babo->nome, é da raça $babo->raca, tem $babo->patas patas,
 $babo->idade de idade e é da cor $babo->cor . <br>";

echo "O $ozzy->nome, é da raça $ozzy->raca, tem $ozzy->patas patas,
 $ozzy->idade de idade e é da cor $ozzy->cor .<br>";