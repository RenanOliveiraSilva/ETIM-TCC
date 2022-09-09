<?php $id = $_GET['id']; ?>
<form class="col l12 m12 s12" action="cadastro.controller.php?acaoCad=inserirGastos&id=<?php echo $id; ?>" method="post">
  <div class="row">
    <blockquote><h4>Cadastro de Gastos</h4> </blockquote>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_irrigacao" name="p_irrigacao" type="number" class="validate" required="">
      <label for="p_irrigacao">Quantidade de Litros Por Irrigação</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_tipo" name="p_tipo" type="text" class="validate" required="">
      <label for="p_tipo">Preço das Semetentes/Mudas</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="p_fertilizante" name="p_fertilizante" type="text" class="validate">
      <label for="p_fertilizante">Gasto Com fertilizantes</label>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>