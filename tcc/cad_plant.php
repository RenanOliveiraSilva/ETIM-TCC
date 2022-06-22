<?php
    if(isset($_GET['metodo'])){
	  $metodo = $_GET['metodo'];	
     $acaoEsp = 'inserir';
	
	 require_once '../controller/cadastro.controller.php';
	 foreach($cadastro as $indice => $cadastro){
		$id=$cadastro->id; 
		//$id_users=$cadastro->id_users;
    $nomePanta=$cadastro->nomePanta; 
		$tipo=$cadastro->tipo; 
		$qtdPlantada=$cadastro->qtdPlantada; 
		$tempo=$cadastro->nome; 
		$data_plantada=$cadastro->$data_plantada; 
		$data_colheita=$cadastro->data_colheita; 
		$tamanho=$cadastro->tamanho; 
		$correcao=$cadastro->correcao; 

	 }  
	}
	

?>

<h1>Formulário cadastro</h1>
	<div class="row">
		<form class="col s12" action="cadastro.controller.php?acaoCad=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="nomePlanta" type="text" name="nomePlanta" class="validate"value="<?php if(isset($nomePlanta)){echo $nomePlanta;}else{echo '';}?>">
					<label for="nomePlanta">Nome da Planta</label>
				</div>
        <div class="input-field col s12 m12 l12">
					<input id="tipo" type="text" name="tipo" class="validate"value="<?php if(isset($tipo)){echo $tipo;}else{echo '';}?>">
					<label for="tipo">Tipo</label>
				</div>
			</div>
      <div class="input-field col s12 m12 l12">
					<input id="qtdPlantada" type="text" name="qtdPlantada" class="validate"value="<?php if(isset($qtdPlantada)){echo $qtdPlantada;}else{echo '';}?>">
					<label for="qtdPlantada">qtdPlantada</label>
				</div>
			</div>
      <div class="input-field col s12 m12 l12">
					<input id="tempo" type="text" name="tempo" class="validate"value="<?php if(isset($tempo)){echo $tempo;}else{echo '';}?>">
					<label for="tempo">tempo</label>
				</div>
			</div>
      <div class="input-field col s12 m12 l12">
					<input id="tamanho" type="text" name="tamanho" class="validate"value="<?php if(isset($tamanho)){echo $tamanho;}else{echo '';}?>">
					<label for="tamanho">tamanho</label>
				</div>
			</div>
      <div class="input-field col s12 m12 l12">
					<input id="correcao" type="text" name="correcao" class="validate"value="<?php if(isset($correcao)){echo $correcao;}else{echo '';}?>">
					<label for="correcao">correcao</label>
				</div>
			</div>
			<input type="submit" name="submit" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
		</form>
	</div>