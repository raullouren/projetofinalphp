<?php

      $user = isset($_POST["user"]) ? $_POST["user"] : "";
      $email = isset($_POST["email"]) ? $_POST["email"] : "";
      $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
      $csenha = isset($_POST["csenha"]) ? $_POST["csenha"] : "";
   
      $mensagem = "";
      $arquivo = fopen("dbtxt.txt", "a+");
   
   
          $arqExiste = (int)file_exists("dbtxt.txt");
   
          if($arqExiste == 1 && filesize("dbtxt.txt") > 0){
              $dados = "\r\n" . $user . ";" . $email . ";" . MD5($senha);
          }else{
              $dados = $user . ";" . $email . ";" . MD5($senha);
          }
          while(!feof($arquivo)){
              $linha = fgets($arquivo);
   
              if(strpos(strtolower($linha), strtolower($user) . ";") === 0){
                  $mensagem = "O nome de usuário \"" . $user . "\" não está disponível no momento.<br><br>Volte e digite outro nome de usuário.";
                  break;
              }
          }
    
   
    
          $escreve = fwrite($arquivo, $dados);

   
      fclose($arquivo);
   
      echo $mensagem;
      echo "<br><a href='/dbtxt/'>Clique aqui para voltar</a>";
  
   ?>
