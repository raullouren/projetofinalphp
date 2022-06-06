<?php


if(10 > 2) {

    echo "entrou no primeiro if <br>";

    if("teste" == "teste") {

        echo "entrou no segundo if <br>";
    }
}
//------------------------------------------------

if(10 > 2) {

    echo "entrou no primeiro if 2<br>";

    if("teste" != "teste") {

        echo "entrou no segundo if 2<br>";
    }else {
        echo "entou no segundo else 2<br>";
    }
}

//-------------------------------------------------

if(10 < 2) {

    echo "entrou no primeiro if 2<br>";

    if("teste" != "teste") {

        echo "entrou no segundo if 2<br>";
    }else {
        echo "entou no segundo else 2<br>";
    }
} else {

    echo "Entrou no primeiro else 3 <br>";
}

//-------------------------------

$escopo = 10;

if(10 > 2) {

    echo "entrou no primeiro if 4<br>";
    
    $escopo2 = 20;

    if("teste" == "teste") {

        echo "entrou no segundo if 4<br>";

        echo $escopo;
        echo " " . $escopo2;

    }else {
        echo "entou no segundo else 4<br>";
    }
} else {

    echo "Entrou no primeiro else 4 <br>";
}

