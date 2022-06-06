<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

$userDao = new UserDAO($conn, $BASE_URL);


// resgata o tipo do formulário 

$type = filter_input(INPUT_POST, "type");

//verificação do tipo de formulário 

if($type === "register") {

$name = filter_input(INPUT_POST, "name");
$lastname = filter_input(INPUT_POST, "lastname");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");
$confirmpassword = filter_input(INPUT_POST, "confirmpassword");
$savePassword = filter_input(INPUT_POST, "password");

// Verificação de dados minimos 

if($name && $lastname && $email && $password){

    // Verificar se email ja esta cadastrado no sistema

    if($userDao->findByEmail($email) === false){

        $user = new User();

        //Criação de toke e senha

        $userToken = $user->generateToken();
        $finalPassword = $user->generatePassword($password);

        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = $finalPassword;
        $user->token = $userToken;

        $auth = true;

        $userDao->create($user, $auth);




    }else{
            // Enviar uma msg de erro, de email ja está cadastrado
    $message->setMessage("o email já está cadastrado.", "error", "back");

    }

    //verificar se as senhas batem
    if($password === $confirmpassword){

    }else {
        // Enviar uma msg de erro, de senhas não batem
    $message->setMessage("As senhas não correspondem.", "error", "back");
    }

    if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{8,}$/", $savePassword)){

    }else{
              // Enviar uma msg de erro, de a senha deve conter pelo menos 1 numero, 1 letra maiuscula, 1 letra minuscula e 8 caracaters 
    $message->setMessage("A senha deve conter pelo menos um numero, uma letra minuscula, uma letra maiuscula e 8 digitos", "error", "back");

    }

    
}else{

    // Enviar uma msg de erro, de dados faltantes
    $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

}

}else if($type === "login"){

    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    //tenta autenticar o usuario

    if($userDao->authenticateUser($email, $password)){

        $message->setMessage("Seja bem Vindo!", "success", "editprofile.php");

    }else{
        // redireciona o usuario caso a autenticação nao seja valida
        $message->setMessage("Usuário e/ou senha incorretos.", "error", "back");

    }
    

} else {
    $message->setMessage("Informações inválidas.", "error", "index.php");
}


