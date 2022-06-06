<?php

function defineCorCarro($cor = "vermelho"){

   return " A cor do carro é : $cor <br>"; 
}


echo defineCorCarro("amarelo");
echo defineCorCarro();
echo defineCorCarro("azul");
echo defineCorCarro("verde");