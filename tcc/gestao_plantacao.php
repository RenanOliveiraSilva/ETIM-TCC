<?php

    require_once "../controller/cadastro.controller.php";

    foreach($cadastro as $indice => $cadastro){

      $id=$cadastro->id; 
      $nomePlanta=$cadastro->nomePlanta; 
      $tipo=$cadastro->tipo; 
      $qtdPlantada=$cadastro->qtdPlantada; 
      $tempo=$cadastro->tempo; 
      $data_plantada=$cadastro->data_plantada; 
      $data_colheita=$cadastro->data_colheita; 
      $irrigacao=$cadastro->irrigacao; 

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrivateAgro</title>

    <style>

    </style>

</head>
<body>

      <div class="list col l4 m6 s12">
      <h5><blockquote>Planta Selecionada</blockquote></h5>
      <hr>

        <h6>Nome da Planta: <?php echo $nomePlanta;?></h6>
        <h6>Quantidade de <?php if ($tipo == "Semente") echo "Sementes"; else echo "Mudas";?>: <?php echo $qtdPlantada;?></h6>
        <h6>Data Plantada: <?php echo $data_plantada;?></h6>
        <h6>Quantidade de Irrigações por Dia: <?php echo $irrigacao;?></h6>

        <a class="waves-effect waves-light btn">Inserir</a>
        <a class="waves-effect waves-light btn">Alterar</a>


      </div>

    <div class="table col l8 m6 s12">
      <table class = "striped">
        <thead>
          <tr>
              <th>Gastos</th>
              <th>       </th>
              <th>Valor</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Irrigações</td>
            <td></td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td><?php echo $tipo;?></td>
            <td></td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Fertilizantes</td>
            <td></td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
      <hr>
      <h5 class='red-text text-accent-4'>Total Gasto:</h5>
    </div>
    </div>
    
</body>
</html>