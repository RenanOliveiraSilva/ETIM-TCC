<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";

    @$acao = $_GET['acao'];

    foreach ($users as $users)
    {
        $id=$users->id;
        $username=$users->username;
        $password=$users->password;
        $data=$users->data;
        $tarifa=$users->tarifa;
    }

    $popUp = "sucesso";


    if (isset($popUp)) {
      if ($popUp == "sucesso") {
        echo "<input type='button' onclick='Sucesso()'>";
      }
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
        <?php

            if (!isset($cadastro->id)) {
        
              if ($acao == "excluir")
              {
                foreach ($cadastro as $cadastro) {
                echo "<tr>".
                  "<td>".$cadastro->nomePlanta."</td>".
                  "<td>".$cadastro->data_plantada."</td>".
                  "<td>".'<a class="waves-effect waves-light btn" id="cor"  href="confirmar.php?id='.$cadastro->id.'"><i class="large material-icons excluir">delete</i></a>'."</td>"
                ."</tr>";  
                }
              } else 
              {
                foreach ($cadastro as $cadastro) {
                  echo "<tr>".
                  "<td>".$cadastro->nomePlanta."</td>".
                  "<td>".$cadastro->data_plantada."</td>".
                  "<td>".'<a class="waves-effect waves-light btn"  href="index.php?link=5&id='.$cadastro->id.'&acaoCad=recuperarPlantacao"><i class="large material-icons">check</i></a>'."</td>"
                ."</tr>";  
                }
              }

            } else {



            }


        
        ?>
      
      </tbody>
    </table>
    <hr>
    <?php if ($acao == "excluir") echo'<a class="waves-effect waves-light btn"  href="index.php?link=3&acaoCad=recuperar"><i class="large material-icons">search</i>Consultar</a>';
          else echo'<a class="waves-effect waves-light btn" id="cor"  href="index.php?link=3&acaoCad=recuperar&acao=excluir"><i class="large material-icons">delete</i>Excluir</a>';
    ?>
      <a class="waves-effect waves-light btn" id="alt" href="index.php?link=6"><i class="large material-icons">edit</i>Alterar</a><br>
    <hr>
 
<?php } ?>

<script>

function Sucesso() {
    Materialize.toast('Exclusão Efetuada!', 4000);
}

</script>


