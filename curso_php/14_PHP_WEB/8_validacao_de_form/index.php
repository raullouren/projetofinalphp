<?php

$validacoes = [];

if(count($_POST)>0){

    if($_POST['nome'] === ""){
        $validacoes[] = "Por favor, digite o nome do usuário";
    }
    if($_POST['email'] === ""){
        $validacoes[] = "Por favor, digite o email";
    }
    if($_POST['senha'] === ""){
        $validacoes[] = "Por favor, digite a senha";
    }
    if($_POST['confirmacao'] === ""){
        $validacoes[] = "Por favor, digite a confirmação";

    } 
    if($_POST['confirmacao'] != $_POST['senha']){
        $validacoes[] = "As senhas não conferem";}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>




    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div> 
        <div>
            <input type="text" name="email" placeholder="Digite o seu email">
        </div> 
        <div>
            <input type="password" name="senha" placeholder="Digite a sua senha">
        </div> 
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
        </div> 
        <div>
            <input type="submit" value="Enviar">
        </div>
</body>
</html>