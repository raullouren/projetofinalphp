<?php

class Humano {


}

class Animal {

}

class Professor extends Humano {


}


$marcos = new Humano;

$turca = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é um Humano <br>";
} else {
    echo " O Marcos é um humano <br>";
}

if($turca instanceof Humano) {
    echo "Turca é um Humano <br>";
} else {
    echo " A Turca não é um humano <br>";
}

$pedro = new Professor;

if($pedro instanceof Humano) {
    echo "Pedro é um Humano <br>";
} else {
    echo " O Pedro é um humano <br>";
}

if($pedro instanceof Professor) {
    echo "Pedro é um Professor <br>";
} else {
    echo " O Pedro é um Professor <br>";
}

if($turca instanceof Professor) {
    echo "Turca é um Professor <br>";
} else {
    echo " A Turca não é um Professor <br>";
}
