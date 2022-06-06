<?php
$idadebase = 18;
$idade1 = 12;
$idade2 = 21;
$idade3 = 13;

$msg = " O aluno é maior de idade <br>";
$msg2 = " O aluno é menor de idade <br>";


if($idade1 >= $idadebase) {
    echo "1 - ";
    echo $msg;
} else {
    echo "1 - ";
    echo $msg2;
}

if($idade2 >= $idadebase) {
    echo "2 - ";
    echo $msg;
} else {
    echo "2 - ";
    echo $msg2;
}
    echo "3- ";
    echo ($idade3 >= $idadebase) ?  $msg : $msg2;


if($idade3 > $idadebase) {
    echo "4 - ";
    echo $msg;
}
else{
    echo "4 - ";
    echo $msg2 ;
}