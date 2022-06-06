<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db); 

//ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO
$item = $result->fetch_assoc();
// TODOS OS RESULTADOS DA TABELA

$itens = $result->fetch_all();

print_r($item);
echo "<br>";
print_r($itens);
echo "<br>";
