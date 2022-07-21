<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/cad_plantcss.css">
    
    <script src="cad_script.js" defer></script>
    
    <title>Private Agro</title>
    </head>

  <body>


    <main>

      <section class="login">

        <div class="wrapper">

          <h1 class="login__tittle">Cadastro da Plantação</h1>

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
                        $tempo=$cadastro->nome; 
                        $data_plantada=$cadastro->$data_plantada; 
                        $data_colheita=$cadastro->data_colheita; 
                        $tamanho=$cadastro->tamanho; 

                      }  
              }


          ?>

			<form class="col s12" action="cadastro.controller.php?acaoCad=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="post">
            <label class="login__label">

              <span>Nome da Planta</span>
              <input id="nomePlanta" type="text" name="nomePlanta" class="validate"value="<?php if(isset($nomePlanta)){echo $nomePlanta;}else{echo '';}?>">
			  <span class="invalid-feedback"></span>

            </label>

			<label class="login__label">

				<span>Tipo</span>
				<input id="tipo" type="text" name="tipo" class="validate"value="<?php if(isset($tipo)){echo $tipo;}else{echo '';}?>">
				<span class="invalid-feedback"></span>

			</label>

			<label class="login__label">

				<span>Quantidade plantada</span>
				<input id="qtdPlantada" type="text" name="qtdPlantada" class="validate"value="<?php if(isset($qtdPlantada)){echo $qtdPlantada;}else{echo '';}?>">
				<span class="invalid-feedback"></span>

			</label>

			<label class="login__label">

				<span>Tempo do Plantio</span>
				<input id="tempo" type="text" name="tempo" class="validate"value="<?php if(isset($tempo)){echo $tempo;}else{echo '';}?>">
				<span class="invalid-feedback"></span>
				
			</label>

			<label class="login__label">

				<span>Tamanho</span>
        <input id="tamanho" type="text" name="tamanho" class="validate"value="<?php if(isset($tamanho)){echo $tamanho;}else{echo '';}?>">
				<span class="invalid-feedback"></span>

			</label>

            <div class="wrapper">
              <button type="submit" class = "login__button" value="<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/>
                  </svg>
            </div>            
        </form>


        </div>
      </section>

      <section class="wallpaper"></section>

    </main>

        </body>


</html>