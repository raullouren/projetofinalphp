<?php

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";


$dezdias = strtotime("10 days");

echo $dezdias . "<br>";

$dataAtualMais5 = date("d/m/y", $cincodias);

echo $dataAtualMais5 . "<br>";


$doisMeses = strtotime("2 months");

echo $doisMeses . "<br>";

$dataAtualMais2Meses = date("d/m/y", $doisMeses);

echo $dataAtualMais2Meses . "<br>";


$dozeAnos = strtotime("12 years");

echo date("d/m/Y", $dozeAnos) . "<br>";
