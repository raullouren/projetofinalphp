<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//ASSUNTO DA AULA

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$item = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($item);

echo "<br>";
echo "<br>";
echo "<br>";


/// testando outro com multiplos valores


$id1 = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id1);

$stmt->execute();

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);



