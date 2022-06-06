<?php



function itens($a = 1,$b = 2, $c =3) {

    $itens = [];

    array_push($itens,$a,$b,$c);

    echo "os itens selecionados foram: ";
    echo implode (",", $itens) . "<br>";

    
    return;
} 


itens("cebola","macarrao", "batata");

