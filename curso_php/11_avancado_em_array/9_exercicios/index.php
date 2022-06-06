<?php

$carro = ["jaguar", 3.0, "azul", 18, "Teto Solar", "Automatico"];

print_r($carro);
echo "<br>";


list($marca, $motor, $cor, $rodas, $teto, $cambio) = $carro;

echo $marca . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $rodas . "<br>";
echo $teto . "<br>";
echo $cambio . "<br>";