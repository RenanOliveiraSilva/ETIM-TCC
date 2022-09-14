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
        $cadastroService->excluir($id);
        header("location: ../tcc/index.php?link=3&acaoCad=recuperar");

    } elseif ($acaoCad == "recuperar")
    {
        $cadastro = new Cadastro();
        $conexao = new Conexao();
        $id_users = $_SESSION['id'];
        
        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastro = $cadastroService->recuperar($id_users);

    } elseif ($acaoCad == "inserirGastos") {

        $cadastro = new Cadastro();
        $conexao = new Conexao();

        $p_irrigacao = $_POST['p_irrigacao'];
        $qtd_plantada = $_GET['qtdplantada'];
        $tempo = $_GET['tempo'];
        $irrigacao = $_GET['irrigacao'];
        $tarifa = $_GET['tarifa'];

        $gastos = 20;

        $cadastro->__set('id',$id);
        $cadastro->__set('p_irrigacao',$_POST['p_irrigacao']);
        $cadastro->__set('p_tipo',$_POST['p_tipo']);
        $cadastro->__set('p_fertilizante',$_POST['p_fertilizante']);

        echo $tempo;

        $cadastroService = new CadastroService($cadastro, $conexao);
        $cadastro = $cadastroService->inserirGastos($id, $gastos);
        //header("location: index.php?link=5&id=$id&acaoCad=recuperarPlantacao");
    }



?>

