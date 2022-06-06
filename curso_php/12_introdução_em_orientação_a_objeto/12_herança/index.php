<?php

class Humano {

   public $idade =29;

   public function falar(){

    echo "ola mundo <br>";

   }

   private function gritar() {
      echo "ESTOU GRITANDO <br>";
   }

   public function acessaGritar(){
      $this->gritar();
   }

   protected function falarBaixinho(){

      echo "lalalal <br>";
   }

   public function acessaFalarBaixinho(){
      $this->falarbaixinho();
   }
}

class Programador extends Humano {

   public function acessaFalarBaixinhoProgramador(){
      $this->falarbaixinho();
   }


}

$ze = new Humano;

$ze->falar();
$ze->acessaGritar();
$ze->acessaFalarBaixinho();


$matheus = new Programador;

echo $matheus->idade . "<br>";

$matheus->falar();
$matheus->acessaGritar();
$matheus->acessaFalarBaixinho();
$matheus->acessaFalarBaixinhoProgramador();