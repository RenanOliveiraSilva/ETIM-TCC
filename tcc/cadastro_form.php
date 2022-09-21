<?php
  if(isset($_GET['metodo'])){

    $metodo = $_GET['metodo'];	
    $acaoEsp = 'inserir';

    require_once '../controller/cadastro.controller.php';

    foreach($cadastro as $indice => $cadastro){

      $id=$cadastro->id; 
      $nomePanta=$cadastro->nomePanta; 
      $tipo=$cadastro->tipo; 
      $qtdPlantada=$cadastro->qtdPlantada; 
      $tempo=$cadastro->tempo; 
      $data_plantada=$cadastro->data_plantada; 
      $data_colheita=$cadastro->data_colheita; 
      $irrigacao=$cadastro->irrigacao; 

    }  
  }

?>

<form class="col l12 m12 s12" action="cadastro.controller.php?acaoCad=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
  <div class="row">
    <blockquote><h4>Cadastro de Plantação</h4> </blockquote>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="nomePlanta" name="nomePlanta" type="text" class="validate" value="<?php if(isset($nomePlanta)){echo $nomePlanta;}else{echo '';}?>" required="">
      <label for="nomePlanta">Nome da Planta</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="tipo" name="tipo" type="text" class="validate" value="<?php if(isset($tipo)){echo $tipo;}else{echo '';}?>" required="">
      <label for="tipo">Tipo</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="qtdPlantada" name="qtdPlantada" type="number" class="validate" value="<?php if(isset($qtdPlantada)){echo $qtdPlantada;}else{echo '';}?>" required="">
      <label for="qtdPlantada">Quantidade Plantada</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="tempo" name="tempo" type="number" class="validate" value="<?php if(isset($tempo)){echo $tempo;}else{echo '';}?>" required="">
      <label for="tempo">Tempo para a Colheita(Dias)</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="irrigacao" name="irrigacao" type="number" class="validate" value="<?php if(isset($irrigacao)){echo $irrigacao;}else{echo '';}?>" required="">
      <label for="irrigacao">Quantidade de Irrigações por Dia</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <fieldset>
      <legend> Tipo </legend>
        <div>
          <input name="group1" type="radio" id="test1" name="s" class="validate" value="s"/>
          <label for="test1">Semente</label>
        </div>
        <div>
          <input name="group1" type="radio" id="test2" name="m" class="validate" value="m"/>
          <label for="test2">Muda</label>
        </div>
      </fieldset>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>
