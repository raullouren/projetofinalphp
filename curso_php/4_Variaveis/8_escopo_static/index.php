<?php
 

function teste() {


    $a = 0;
    $a++;

    echo "$a <br>";
}

teste ();
teste ();
teste ();


function testeStatic() {


    static $a = 0;
    $a++;

    echo "$a <br>";

}


testeStatic();
testeStatic();
testeStatic();

function testeStat() {


    static $a = 0;
    $a++;

    echo "$a <br>";

}


testeStat();
testeStat();
testeStat();