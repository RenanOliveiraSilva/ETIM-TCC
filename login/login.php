<?php

       session_start();

        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                header("location: ../tcc/index.php");
                exit;
        }

        require_once 'config.php';
        
        $usuario = "";
        $senha = "";
        $user_erro = "";
        $pass_erro = "";
        $login_erro = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){

                // usuario
                if (empty(trim($_POST["usuario"]))) {
                        $user_erro = "Insira o nome do usuário";
                } else {
                        $usuario = trim($_POST["usuario"]);
                }
                //senha
                if (empty(trim($_POST["senha"]))) {
                        $pass_erro = "Insira a senha";
                } else {
                        $senha = trim($_POST["senha"]);
                }
                //validação
                if(empty($user_erro) && empty($pass_erro)){
                        // Prepare uma declaração selecionada
                        $sql = "SELECT id, username, password FROM users WHERE username = :username";
                        
                        if($stmt = $conexao->prepare($sql)){
                            // Vincule as variáveis à instrução preparada como parâmetros
                            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                            
                            // Definir parâmetros
                            $param_username = trim($_POST["usuario"]);
                            
                            // Tente executar a declaração preparada
                            if($stmt->execute()){
                                // Verifique se o nome de usuário existe, se sim, verifique a senha
                                if($stmt->rowCount() == 1){
                                    if($row = $stmt->fetch()){
                                        $id = $row["id"];
                                        $username = $row["username"];
                                        $hashed_password = $row["password"];
                                        if(password_verify($senha, $hashed_password)){
                                            // A senha está correta, então inicie uma nova sessão
                                            session_start();
                                            
                                            // Armazene dados em variáveis de sessão
                                            $_SESSION["loggedin"] = true;
                                            $_SESSION["id"] = $id;
                                            $_SESSION["username"] = $username;                            
                                            
                                            // Redirecionar o usuário para a página de boas-vindas
                                            header("location: ../tcc/index.php");
                                        } else{
                                            // A senha não é válida, exibe uma mensagem de erro genérica
                                            $login_erro = "Nome de usuário ou senha inválidos.";
                                        }
                                    }
                                } else{
                                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                                    $login_erro = "Nome de usuário ou senha não existem.";
                                }
                            } else{
                                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                            }

                                unset($stmt);

                        }

                        unset($conexao);

                }



        }

        include_once 'form.php';

?>

