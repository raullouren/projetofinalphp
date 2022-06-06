<?php

$marca = "bmw";
$motor = "3.0";
$tetorSolar = true;
$portas = 4;


$carro = compact("marca", "motor", "tetorSolar", "portas");

print_r ($carro);
echo "<br>";