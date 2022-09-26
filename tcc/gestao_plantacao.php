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
      $p_irrigacao=$cadastro->p_irrigacao; 
      $p_tipo=$cadastro->p_tipo; 
      $p_fertilizante=$cadastro->p_fertilizante; 
      $gastos=$cadastro->gastos; 

    }

    $data = new DateTime($data_plantada);

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
        <h6>Quantidade de <?php if (strtolower($tipo) == "semente") echo "Sementes"; else echo "Mudas";?>: <?php echo $qtdPlantada;?></h6>
        <h6>Data Plantada: <?php echo $data->format('d-m-Y');?></h6>
        <h6>Quantidade de Irrigações por Dia: <?php echo $irrigacao;?></h6>

        <?php     


          if (!isset($p_irrigacao)) { 
?>          <a class="waves-effect waves-light btn" href="index.php?link=7&id=<?php echo $id;?>&acaoCad=recuperarPlantacao">Inserir</a> <?php
          } else {
?>          <a class="waves-effect waves-light btn" href="index.php?link=7&id=<?php echo $id;?>&acaoCad=recuperarPlantacao">Alterar</a> <?php
          }

        ?>

      </div>
    <?php
      if (isset($p_irrigacao))
      {?>
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
              <td><?php echo $p_irrigacao;?></td>
            </tr>
            <tr>
              <td><?php echo $tipo;?></td>
              <td></td>
              <td><?php echo $p_tipo;?></td>
            </tr>
            <tr>
              <td>Fertilizantes</td>
              <td></td>
              <td><?php echo $p_fertilizante;?></td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h5 class='red-text text-accent-4'>Total Gasto: <?php echo $gastos; ?>    
          <a href="../phplot/bars-center-label3.php?valor_irrigacao=<?php echo $p_irrigacao; ?>&valor_tipo=<?php echo $p_tipo; ?>&valor_fertilizante=<?php echo $p_fertilizante; ?>" target="__blank" rel="noopener noreferrer" >
          <i class="small material-icons">insert_chart</i>
          </a>
        </h5>
      </div>
      </div><?php
        $_SESSION["p_irrigacao"] = $p_irrigacao;
        $_SESSION["p_tipo"] = $p_tipo;
        $_SESSION["p_fertilizante"] = $p_fertilizante;
        $_SESSION["tipo"] = $tipo;
        $_SESSION["nome"] = $nomePlanta;

      } else
      { ?>
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
              <td>-Não Inserido-</td>
            </tr>
            <tr>
            <td><?php if (strtolower($tipo) == "semente") echo "Sementes"; else echo "Mudas";?></td>
              <td></td>
              <td>-Não Inserido-</td>
            </tr>
            <tr>
              <td>Fertilizantes</td>
              <td></td>
              <td>-Não Inserido-</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h5 class='red-text text-accent-4'>Total Gasto: Não Definido</h5>

        
      </div> <?php
      }
    ?>
    
</body>
</html>