<?php

if(12 < 5 || "joao" === "joao") // false e true
{

    echo "É verdadeira 1 <br>";
}

if(1 > 5 || 1) // false e true
{

    echo "É verdadeiro 2 <br>";
}

if(20 === "20" && 51 >= 31) // false e true porém é AND
 {

    echo " É verdadeiro 3 <br>";

}


if(20 == "20" && 51 >= 31) // false e true porém é AND
 {

    echo " É verdadeiro 4 <br>";

}