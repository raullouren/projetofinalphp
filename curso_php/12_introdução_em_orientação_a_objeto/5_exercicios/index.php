<?php

class Cachorro {

    function latir(){

        echo "AuAuAuAu <br>";

    }

    function andar($m){

        echo "Andou $m metros ! <br>";

    }
}

$ozzy = new Cachorro;
$barney = new Cachorro;

$ozzy->latir();
$barney->latir();

 $ozzy->andar(12);
 $barney->andar(15);