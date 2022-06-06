<?php

$a = ["carro" => 8.5, "sofa" => 12, "chapeu" => 4, "galinha" => 23];

function itens($a){
      
    $c = [];

    foreach($a as $item => $preco){

        if($preco < 10) {

            array_push($c, $item);
        }
    }

    return $c;

}

$d = itens($a);

print_r($d);