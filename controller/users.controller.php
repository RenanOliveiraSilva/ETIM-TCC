<?php

    require_once '../conexao/conexao.php';
    require_once '../model/users.model.php'; 
    require_once '../service/users.service.php'; 

    @$acaoTar = isset($_GET['acaoTar'])?$_GET['acaoTar']:$acaoTar;
 
    if ($acaoTar == "inserir") 
    {
        session_start();  
        $id_users = $_SESSION['id'];

        $users = new Users();
        $users->__set('tarifa',$_POST['tarifa']);

  
        $conexao = new Conexao;
        $usersService = new UsersService($users, $conexao);
        $usersService->inserir($id_users);
        header("location: index.php?link=3");

    } elseif ($acaoTar == "") {
        $users = new Users();
        $conexao = new Conexao();
        $id_users = $_SESSION['id'];
        
        $usersService = new UsersService($users, $conexao);
        $users = $usersService->recuperar($id_users);
    }

?>