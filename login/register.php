<?php

    $usuario = "";
    $senha = "";
    $pass_confirm = "";
    $user_erro = "";
    $pass_erro = "";
    $confirm_pass_erro = "";


    require_once "config.php";
    
    // Defina variáveis e inicialize com valores vazios
    $usuario = $pass = $pass_confirm = "";
    $user_erro = $pass_erro = $confirm_pass_erro = "";
    
    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        // Validar nome de usuário
        if(empty(trim($_POST["usuario"]))){
            $user_erro = "Por favor, coloque um nome de usuário.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["usuario"]))){
            $user_erro = "O nome de usuário pode conter apenas letras, números e sublinhados.";
        } else{
            // Prepare uma declaração selecionada
            $sql = "SELECT id FROM users WHERE username = :username";
            
            if($stmt = $conexao->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                
                // Definir parâmetros
                $param_username = trim($_POST["usuario"]);
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        $user_erro = "Este nome de usuário já está em uso.";
                    } else{
                        $usuario = trim($_POST["usuario"]);
                    }
                } else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }
        
        // Validar senha
        if(empty(trim($_POST["senha"]))){
            $pass_erro = "Por favor, insira uma senha.";     
        } elseif(strlen(trim($_POST["senha"])) < 6){
            $pass_erro = "A senha deve ter pelo menos 6 caracteres.";
        } else{
            $pass = trim($_POST["senha"]);
        }
        
        // Validar e confirmar a senha
        if(empty(trim($_POST["pass_confirm"]))){
            $confirm_pass_erro = "Por favor, confirme a senha.";     
        } else{
            $pass_confirm = trim($_POST["pass_confirm"]);
            if(empty($pass_erro) && ($pass != $pass_confirm)){
                $confirm_pass_erro = "A senha não confere.";
            }
        }
        
        // Verifique os erros de entrada antes de inserir no banco de dados
        if(empty($user_erro) && empty($pass_erro) && empty($confirm_pass_erro)){
            
            // Prepare uma declaração de inserção
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            
            if($stmt = $conexao->prepare($sql)){
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
                
                // Definir parâmetros
                $param_username = $usuario;
                $param_password = password_hash($pass, PASSWORD_DEFAULT); // Creates a pass hash
                
                // Tente executar a declaração preparada
                if($stmt->execute()){
                    // Redirecionar para a página de login
                    header("location: login.php");
                } else{
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }
        
        // Fechar conexão
        unset($pdo);
    }

    include_once "form_register.php";

?>
 

    







