<?php
    require_once '../conexao/conexao.php'; 
    require_once '../model/cadastro.model.php'; 
    require_once '../service/cadastro.service.php'; 


    $acaoCad = "inserir";

    if ($acaoCad == "inserir") 
    {
        $cadastro = new Cadastro;

        $cadastro->__set('id_users',$_POST['id_users']);
        $cadastro->__set('nomePlanta',$_POST['nomePlanta']);
        $cadastro->__set('tipo',$_POST['tipo']);
        $cadastro->__set('qtdPlantada',$_POST['qtdPlantada']);
        $cadastro->__set('tempo',$_POST['tempo']);
        $cadastro->__set('tamanho',$_POST['tamanho']);
        $cadastro->__set('correcao',$_POST['correcao']);

        $conexao = new Conexao();
	
        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastroService->inserir();
    }



?>