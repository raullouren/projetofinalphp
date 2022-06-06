<?php

$carro = [
 'cor' => 'vermelho',
 'motor' => '1.6',
 'teto_solar' => true
];

print_r($carro);
echo "<br>";
echo $carro['cor'];
echo "<br>";
echo $carro['motor'];
echo "<br>";
echo $carro['teto_solar'];
echo "<br>";


$cor = $carro['cor'];
$motor = $carro["motor"];

echo "o carro é da cor $cor e tem uma motor $motor.";