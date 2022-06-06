<?php


$a = 5;
$b = 2;
$c = "Matheus";
$d = "Pedro";
$e = 12;
$f = 11;

if( $a > $b ) {
    echo  $a . " " . "é maior que" . " " . $b . "<br>";
}

if( $c != $d ) {
    echo  $c . " " . "é diferente de" . " " . $d . "<br>";
}

if( $e <= $f ) {
    echo  $e . " " . "é menor ou igual que" . " " . $f . "<br>";
}

echo ($e >= $f) ? $f . " " . "é menor ou igual que" . " " . $e . "<br>" : $e . " " . "é maior  que" . " " . $f . "<br>";


echo ($e <= $f) ? $f . " " . "é menor ou igual que" . " " . $e . "<br>" : $e . " " . "é maior  que" . " " . $f . "<br>";