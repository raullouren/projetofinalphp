<?php

class Carro {

    public $velocidadeMaxima;
    public $cor;
    public $rodas;

    function setVelocidadeMaxima($vel) {

          $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima() {  
        

         echo "A velocidade maxima do carro é $this->velocidadeMaxima <br>";

    }
}


$bmw =  new Carro;

$bmw->cor = "Branca";
$bmw->rodas = "Aro 20";


$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

$ferrai = new Carro;


$bmw->setVelocidadeMaxima(300);

$bmw->getVelocidadeMaxima();