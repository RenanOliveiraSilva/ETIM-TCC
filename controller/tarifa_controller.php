<?php

    require_once '../conexao/conexao.php';
    require_once '../model/cadastro.model.php'; 
    require_once '../service/cadastro.service.php'; 

    $acaoTar = "inserir";

    if ($acaoTar == "inserir") 
    {
        $id_users = $_SESSION['id'];

        $tarifa = new Tarifa();

        $tarifa->__set('id_users',$id_users);
        $tarifa->__set('valor_tarifa',$_POST['valor_tarifa']);

        $conexao = new Conexao;

        $tarifaService = new TarifaService($tarefa, $conexao);
        $tarifaService->inserir();
        header("location: ../tcc/index.php");

    } elseif ($acaoTar = "recuperar") {

    }

?>