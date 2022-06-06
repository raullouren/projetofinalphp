<?php

class Humano {

   public $idade =  29 ;
   public $altura = 1.83;
   public $nascionalidade = "brasileira";


   public function falar(){

    echo "falou algo  <br>";

   }

}

class Professor extends Humano {

    public $materia = "Matematica";
    public $nivel = "doutorado";

    public  function ensinar(){

        echo "Ensinando $this->materia <br>";
    }

}

$raul = new Professor;

echo $raul->falar() . "<br>";
echo $raul->idade . "<br>";
echo $raul->altura . "<br>";
echo $raul->nascionalidade ."<br>";
echo $raul->materia . "<br>";
echo $raul->nivel . "<br>";
echo $raul->ensinar() . "<br>";