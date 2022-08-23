<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";
    $i = 0;
    @$acao = $_GET['acao'];

    foreach ($users as $users)
    {
        $id=$users->id;
        $username=$users->username;
        $password=$users->password;
        $data=$users->data;
        $tarifa=$users->tarifa;
    }

    $ids = [];
    $plantacoes = [];
    $data = [];

    foreach($cadastro as $indice => $cadastro)
    {
      array_push($ids, $cadastro->id);
      array_push($plantacoes, $cadastro->nomePlanta);
      array_push($data, $cadastro->data_plantada);
    }
    

    if (empty($tarifa)) 
    {
        echo '<script>alert("Para a gestão de gasto cadastre as informações");</script> 
        ';
        
        include_once "tarifa_form.php";
    } else {

?>
    <div class="tabela">
      <blockquote><b><h4> <?php if ($acao=="") echo "Selecione "; else echo "Excluir "; ?>uma Plantação </h4></b></blockquote>
      <hr>
      <table class ="highlight">
      <thead>
        <tr>
            <th>Nome</th>
            <th>Data Plantada</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($plantacoes as $index => $valor) {

        if ($acao == "excluir") 
        { 
          echo "<tr>".
          "<td>".$valor."</td>".
          "<td>".$data[$i]."</td>".
          "<td>".'<a class="waves-effect waves-light btn"  href="../controller/cadastro.controller.php?&id='.$ids[$i].'&acaoCad=excluir"><i class="large material-icons excluir">delete</i></a>'."</td>"
          ."</tr>";
          $i++;
        } else 
        {
          echo "<tr>".
          "<td>".$valor."</td>".
          "<td>".$data[$i]."</td>".
          "<td>".'<a class="waves-effect waves-light btn"  href="index.php?link=5&id='.$ids[$i].'&acaoCad=recuperarPlantacao"><i class="large material-icons">check</i></a>'."</td>"
          ."</tr>";
          $i++;
        }



      }
      ?>
      </tbody>
    </table>
    <hr>
    <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="index.php?link=3&acao=excluir&acaoCad=recuperar"><i class="material-icons">delete</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="index.php?link=6"><i class="material-icons">border_color</i></a></li>
    </ul>
  </div>
  </div>

  <script type="text/javascript"> 
       document.querySelectorAll(".excluir").forEach( (botao)=>{  
            botao.addEventListener('click',(e)=>{
                confirm("Confirma a exclusão do Plantação? ");
            });
        });
  </script>

<?php } ?>