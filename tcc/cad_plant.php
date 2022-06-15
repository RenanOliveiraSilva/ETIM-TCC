<?php
    require_once "../controller/cadastro.controller.php";
	 $metodo = $_GET['metodo'];	

?>

<!DOCTYPE html>

  <html>

    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<div class="container">
    <div class="row">
        <h1>Cadastro de plantação</h1>
        <form class="col s12" action="cadastro.controller.php?acaoCad=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
        <div class="row">
                    <!--<p>Tipo</p>
                        <p>
                    <input type="checkbox" class="filled-in" id="planta">
                    <label for="planta">Planta</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="filled-in" id="muda">
                    <label for="muda">Muda</label>
                        </p>-->
            <div class="input-field col s12">
            <input id="nome" type="text" class="validate" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
            <label for="nome">Nome da Planta ou muda</label>
            </div>
        </div>
        <div class="input-field col s12">
            <input id="tipo" type="text" class="validate" value="<?php if(isset($tipo)){echo $tipo;}else{echo '';}?>">
            <label for="tipo">Tipo</label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input placeholder="(Apenas números)" id="qtdPlantada" type="number" class="validate" value="<?php if(isset($qtdPlantada)){echo $qtdPlantada;}else{echo '';}?>">
          <label for="qtdPlantada">Quantidade Plantada</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="(Em dias e apenas números)" id="tempo" type="number" class="validate" value="<?php if(isset($tempo)){echo $tempo;}else{echo '';}?>">
          <label for="tempo">Tempo do plantio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="(Em hectares ou canteiros)" id="tamanho" type="number" class="validate" value="<?php if(isset($tamanho)){echo $tamanho;}else{echo '';}?>">
          <label for="tamanho">Tamanho do plantio</label>
        </div>
      </div>
      <div class="input-field col s12">
            <input id="correcao" type="text" class="validate" value="<?php if(isset($correcao)){echo $correcao;}else{echo '';}?>">
            <label for="correcao">correcao</label>
            </div>
        </div>
        </form>
    </div>
    <input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
</div>

  </body>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    
            <script>
            </script>

</html>