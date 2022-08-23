<?php
require_once "../controller/users.controller.php";

?>
<form class="col l12 m12 s12" action="users.controller.php?acaoTar=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
  <div class="row">
    <h4>Cadastre o Preço da Tarifa de Água da Sua Cidade</h4>
  </div>
  <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="tarifa" name="tarifa" type="text" class="validate" value="<?php if(isset($tarifa)){echo $tarifa;}else{echo '';}?>" required="">
      <label for="tarifa">Valor da Tarifa</label>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>
