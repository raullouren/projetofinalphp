<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db); 

// ASSUNTO DA AULA 
$nome = "Suporte de Microfone";
$descricao = "O suporte é novo e foi fabricado na china";

$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (?,?)");

$stmt->bind_param("ss", $nome, $descricao); // s = string i = inteiro/integer s= double


$stmt->execute();


$conn->close();