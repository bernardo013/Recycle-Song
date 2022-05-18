<?php
//Bernardo--
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 //verifica se o POST nome está vazio

    if (empty($_POST['nome'])){
        $erroNome = "Preencha um nome";
    }else{
        // caso não esteja vazio ele pega o valor vindo do POST e limpa
        $nome = $_POST['nome']

        //Verificar se tem somente letras
        if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
            $erroNome = "Aceitamos apenas nomes com letras e espaços em branco"
     }

 }        //verifica se o POST email está vazio
         if (empty($_POST['email'])){
          $erroEmail = "Preencha com um email";
        }else{
             
            $email = $_POST['email']
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail = "e-mail inválido";
            }
        }
         //verifica se o POST senha está vazio
        if (empty($_POST['senha'])){
            $erroSenha = "Preencha com uma senha";
          }else{
               
              $senha = $_POST['senha']; 
              if(strlen($senha) <6){
                  $erroSenha = "e-mail inválido";
              }
          }
          //verifica se o POST Telefone está vazio
          if (empty($_POST['Telefone'])){
            $erroTelefone = "Preencha com número de telefone";
          }else{  
              $senha = $_POST['telefone']; 
              if(preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/", $phone)) {
                  $erroTelefone = "Telefone inválido";

        }
    }
}


?>