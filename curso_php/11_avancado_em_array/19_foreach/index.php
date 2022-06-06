<?php

$matheus = [
   "nome" => "Matheus",
   "idade" => 29,
   "profissao" => "programador",

];

$alexia = [
    "nome" => "Alexia",
    "idade" => 25,
    "profissao" => "Eng. Civil",
 
 ];

 foreach($matheus as $carac => $val) {

    echo "$carac => $val <br>";


 }

 foreach($alexia as  $val) {

    echo "$val <br>";

    
 }