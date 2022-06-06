<?php

trait  Objeto{

    public $y = 10;

    public function teste(){
        echo "Testando Trait de objeto <br>";
    }
}

trait Testando {

    public function traitsteste(){
        echo "Este método é da trait Testando <br>";
    }
}

class Central {
    use Objeto;
    use Testando;
}

$x = new Central;

$x->teste();
$x->traitsteste();
echo $x->y . "<br>";