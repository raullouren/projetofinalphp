<?php

// Porcentagens de cobranças de acordo com o tipo de contrato //
/* Caso seja uma clinica de um hospital  a taxa de ambos sao somados 
e divididos por 2*/

$n1 = 3; // Contrato de escolas //

$n2 = 7; // Contrato de hospitais //

$n3 = 12; // contrato de clinicas //

$n4 = $n2 + $n3;
echo "Porcentagem de Hospitais %$n2";
echo "<br>";
echo "porcentagem de clinicas dentro de hospitais % ".$n4/2 ;