<?php

 function velmaxima($vel) {

    if (is_int($vel)){
    echo "O carro atinge a velocidade maxima de $vel km/h <br>";}
    else {
        echo "Por favor, passe um numero inteiro";
 }}

 velmaxima(200);
 velmaxima(300);
 velmaxima(400);


// nao pode
// velmaxima() sem parametro da erro

echo "teste continuando <br>";

$velo = 125;

velmaxima($velo);

//php ignora parametro desnecessario

velmaxima(250, "teste");

velmaxima("teste");



function descreverAnimal($nome, $raca){

    if (is_string($nome) && is_string($raca)){
    echo "O $nome é da raca $raca  <br>";
} else {echo" passe uma palavra, nao aceitamos numeros";
}

}

descreverAnimal("ozzy", "yorkshire");
descreverAnimal("babo", "lhasa");