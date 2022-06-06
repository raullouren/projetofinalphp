<?php


   if($_GET["nome"]){   
   $nome = $_GET['nome']; 
   $idade = $_GET["idade"]; 
} else {
   $nome = "Padrão";
   $idade = "Padrão";
}

?>

<h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>



// OUTRA OPÇAO É USAR O ISSET AI NAO PRECISA DO ELSE
//  if($_GET["nome"]){   
   $nome = $_GET['nome']; 
   $idade = $_GET["idade"]; 

   