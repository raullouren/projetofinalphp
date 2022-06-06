<?php

class Car {
    public $rodas = 4;
    private $vidro = "sem película"; 
    protected $portas = 4;

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }


}

class Mecanico {
    public function alterarRodas($bmw) {
        $bmw->rodas = 10;
    }

    public function alterarPelicula($bmw, $pelicula) {
        $bmw->vidro = $pelicula;
    }
}

$bmw = new Car;

echo $bmw->rodas . "<br>";

$matheus = new Mecanico;

$matheus->alterarRodas($bmw);

echo $bmw->rodas . "<br>";

// Nao pode alterar pq é privado
//$matheus->alterarPelicula($bmw, "G20");


echo $bmw->getVidro() ."<br>";

//$bmw->vidro = "teste";



echo $bmw->getPortas() ."<br>";


