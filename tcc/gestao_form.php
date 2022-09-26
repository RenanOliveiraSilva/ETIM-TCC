<?php

  require_once "../controller/users.controller.php";
  require_once "../controller/cadastro.controller.php";

  $id = $_GET['id'];

  foreach ($users as $users)
  {
      $id=$users->id;
      $username=$users->username;
      $password=$users->password;
      $data=$users->data;
      $tarifa=$users->tarifa;
  }

  foreach ($cadastro as $cadastro)
  {
    $id=$cadastro->id;   
    $qtdPlantada=$cadastro->qtdPlantada; 
    $tempo=$cadastro->tempo; 
    $irrigacao=$cadastro->irrigacao;
    $p_irrigacao=$cadastro->p_irrigacao;
    $p_tipo=$cadastro->p_tipo;
    $p_fertilizante=$cadastro->p_fertilizante;
  }

?>
<form class="col l12 m12 s12" action="cadastro.controller.php?acaoCad=inserirGastos&id=<?php echo $id;?>&tarifa=<?php echo $tarifa;?>
  &qtdplantada=<?php echo $qtdPlantada;?>&tempo=<?php echo $tempo;?>&irrigacao=<?php echo $irrigacao;?>" method="post">
  <div class="row">
    <blockquote><h4>Cadastro de Gastos</h4> </blockquote>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_irrigacao" name="p_irrigacao" type="number" class="validate" value="<?php if(isset($p_irrigacao)){echo $p_irrigacao;}else{echo '';}?>" required="">
      <label for="p_irrigacao">Quantidade de Litros Por Irrigação</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_tipo" name="p_tipo" type="text" class="validate" value="<?php if(isset($p_tipo)){echo $p_tipo;}else{echo '';}?>" required="">
      <label for="p_tipo">Preço das Semetentes/Mudas(Total)</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_fertilizante" name="p_fertilizante" type="text" value="<?php if(isset($p_fertilizante)){echo $p_fertilizante;}else{echo '';}?>" class="validate">
      <label for="p_fertilizante">Gasto Com fertilizantes</label>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>