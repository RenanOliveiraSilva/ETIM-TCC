<?php
    require_once '../conexao/conexao.php';
    require_once '../model/cadastro.model.php'; 
    require_once '../service/cadastro.service.php'; 

    @$acaoCad = isset($_GET['acaoCad'])?$_GET['acaoCad']:$acaoCad;

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
    } 



?>