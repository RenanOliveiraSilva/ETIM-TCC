
<form class="col l12 m12 s12" action="cadastro.controller.php?acaoCad=InserirLucros&id=<?php echo $id;?>&gasto=<?php echo $cadastro->gastos;?>" method="post">


  <fieldset>
    
    <div class="row">
    <div class="input-field col l12 m12 s12">
      <input id="vendas" name="vendas" type="number" class="validate" required="">
      <label for="vendas">Valor estimado com a Venda:</label>
    </div>
  </div>
    </fieldset>
    <br>

  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="InserirLucros">Enviar
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>