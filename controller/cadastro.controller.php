<?php
    require_once '../conexao/conexao.php';
    require_once '../model/cadastro.model.php'; 
    require_once '../service/cadastro.service.php'; 

    @$acaoCad = isset($_GET['acaoCad'])?$_GET['acaoCad']:$acaoCad;
    @$id = $_GET['id'];

    //$acaoCad = "recuperarPlantacao";

    if ($acaoCad == "inserir") 
    {
        session_start();  
        $id_users = $_SESSION['id'];
        
        $cadastro = new Cadastro();

        $cadastro->__set('id_users',$id_users);
        $cadastro->__set('nomePlanta',$_POST['nomePlanta']);
        $cadastro->__set('tipo',$_POST['tipo']);
        $cadastro->__set('qtdPlantada',$_POST['qtdPlantada']);
        $cadastro->__set('tempo',$_POST['tempo']);
        $cadastro->__set('irrigacao',$_POST['irrigacao']);
        
        $conexao = new Conexao();

        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastroService->inserir();
        header("location: ../tcc/index.php");

    } elseif ($acaoCad == "recuperarPlantacao")
    {
        $cadastro = new Cadastro();
        $conexao = new Conexao();
        
        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastro = $cadastroService->recuperarPlantacao($id);


    } elseif ($acaoCad == "excluir") 
    {
        $cadastro = new Cadastro();
        $conexao = new Conexao();

        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastro = $cadastroService->excluir($id);
        header("location: ../tcc/index.php?link=3&acaoCad=recuperar");

    } elseif ($acaoCad == "recuperar")
    {
        $cadastro = new Cadastro();
        $conexao = new Conexao();
        $id_users = $_SESSION['id'];
        
        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastro = $cadastroService->recuperar($id_users);
    }



?>