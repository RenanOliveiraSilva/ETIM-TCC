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



            if (!empty($cadastro)) {
              
              echo "<h4><blockquote>Lista de Plantações</blockquote></h4>";
              echo "<hr>";

                foreach($cadastro as $cadastro) {
                  $p = "";

                  if (empty($cadastro->gastos)) {$p = "Valor Indefinido";} else {$p = "R$".$cadastro->gastos;}

                echo '<div class="col s12 m6 l4">
                  <div class="card horizontal">
                    <div class="card-stacked">
                      <div class="card-content">
                        <p><b>'.strtoupper($cadastro->nomePlanta).'</b></p>
                        <p>Gastos com a Plantação: <b>'.$p.'</b></p>
                      </div>
                      <div class="card-action">
                        <a href="index.php?link=13&id='.$cadastro->id.'&acaoCad=recuperarPlantacao">CALCULAR LUCROS</a>
                      </div>
                    </div>
                  </div>
                </div>';
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
      

 
    