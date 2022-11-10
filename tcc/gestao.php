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
       // echo "<input type='button' onclick='Sucesso()'>";
      }
    }
    

    if (empty($tarifa)) 
    {
        echo '<script>alert("Para a gestão de gasto cadastre as informações");</script> 
        ';
        
        include_once "tarifa_form.php";
        
    } else {


      

            if (!empty($cadastro)) {
              
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
              if ($acao == "excluir")
              {
                foreach ($cadastro as $cadastro) {
                echo "<tr>".
                  "<td>".$cadastro->nomePlanta."</td>".
                  "<td>".$cadastro->data_plantada."</td>".
                  "<td>".'<a class="waves-effect waves-light btn tooltipped" id="cor" href="confirmar.php?&id='.$cadastro->id.'&acaoCad=excluir" data-position="right" data-delay="50" data-tooltip="Excluir"><i class="large material-icons excluir">delete</i></a>'."</td>"                ."</tr>";  

                
                }

                echo "</tbody>";
                echo "</table>";

                echo "<hr>";

                 if ($acao == "excluir") echo'<a class="waves-effect waves-light btn"  href="index.php?link=3&acaoCad=recuperar"><i class="large material-icons">search</i>Consultar</a>';
                      else echo'<a class="waves-effect waves-light btn" id="cor"  href="index.php?link=3&acaoCad=recuperar&acao=excluir"><i class="large material-icons">delete</i>Excluir</a>';
                
                echo '<a class="waves-effect waves-light btn tooltipped" id="alt" href="index.php?link=6" data-position="bottom" data-delay="50" data-tooltip="Alterar Tarifa"><i class="large material-icons">edit</i>Alterar</a><br>';
                echo "<hr>";

                
              } else 
              {
                foreach ($cadastro as $cadastro) {
                  echo "<tr>".
                  "<td>".$cadastro->nomePlanta."</td>".
                  "<td>".$cadastro->data_plantada."</td>".
                  "<td>".'<a class="waves-effect waves-light btn tooltipped"  href="index.php?link=5&id='.$cadastro->id.'&acaoCad=recuperarPlantacao" data-position="right" data-delay="50" data-tooltip="Selecionar"><i class="large material-icons">check</i></a>'."</td>"
                ."</tr>";


                }

                echo "</tbody>";
                echo "</table>";

                echo "<hr>"; 
                if ($acao == "excluir") echo'<a class="waves-effect waves-light btn"  href="index.php?link=3&acaoCad=recuperar"><i class="large material-icons">search</i>Consultar</a>';
                     else echo'<a class="waves-effect waves-light btn" id="cor"  href="index.php?link=3&acaoCad=recuperar&acao=excluir"><i class="large material-icons">delete</i>Excluir</a>';
               
               echo '<a class="waves-effect waves-light btn tooltipped" id="alt" href="index.php?link=6" data-position="bottom" data-delay="50" data-tooltip="Alterar Tarifa"><i class="large material-icons">edit</i>Alterar</a><br>';
               echo "<hr>";
                
              }

            } else {
              echo '<blockquote><b><h4> Tabela Vazia </h4></b></blockquote>';
              echo ' 
              <table class ="highlight">
                <thead>
                  <tr>
                      <th>Insira uma Plantação </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a class="waves-effect waves-light btn"  href="index.php?link=2"><i class="large material-icons">add</i>Inserir</a></td>
                  </tr>
                </tbody>
              </table>';

            }
      

 
     } ?>

<script>

function Sucesso() {
    Materialize.toast('Exclusão Efetuada!', 4000);
}

</script>

