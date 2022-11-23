<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";

    foreach ($users as $users)
    {
        $id=$users->id;
        $username=$users->username;
        $password=$users->password;
        $data=$users->data;
        $tarifa=$users->tarifa;
    }





    $modo = "p";

    if ($acaoCad == "recuperar" ) {

      echo "<h4><blockquote>Lista de Plantações Plantadas</blockquote></h4>";
      echo "<hr>";
  
      if ($acaoCad == "recuperarColheita") {
          echo '<a class="waves-effect waves-light btn" style="background-color: #317531;" href="index.php?link=12&acaoCad=recuperar">Plantados</a>';
      } else {
          echo '<a class="waves-effect waves-light btn" style="background-color:#D1451B;" href="index.php?link=12&acaoCad=recuperarColheita">Colhidos</a>';
      }
  
      echo "<hr>";

        if (!empty($cadastro)) {


            foreach ($cadastro as $cadastro) {

              $colheita = $cadastro->data_colheita;

              $dateStart = new \DateTime($colheita);
              $dateNow   = new \DateTime(date('Y-m-d'));
      
              $dateDiff = $dateStart->diff($dateNow);


              if ($dateDiff->days == 0) 
              
              {
                $b1 = "../controller/cadastro.controller.php?acaoCad=guardar&id=$cadastro->id";
                $b2 = "background-color:#008000;";

              } 
              
              else 
              
              {
                $b1 = "guardar_teste.php";
                $b2 = "background-color:#D1451B;";
              }

              if (!empty($cadastro->data_colheita && $cadastro->lucro)) {

                echo '
                <table class = "highlight">
                <thead>
                <tr>
                <th>Nome Plantação</th>
                <th>Status</th>
                <th>Guardar</th>
                </tr>
                </thead>
    
                <tbody>
    
                ';

                echo '
                <tr>
                <td>'.$cadastro->nomePlanta.'</td>
                <td>'.$cadastro->status.'</td>
                <td><a class="waves-effect waves-light btn" style='.$b2.' href='.$b1.'><i class="material-icons">assignment</i></a></td>
  
                </tr>
  
                ';
              } else 

              {

                
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
      



            }

            echo ' </tbody>
            </table>';

        } else 
        {
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

    }   else

    {

      echo "<h4><blockquote>Lista de Plantações Colhidas   </blockquote></h4>";
      echo "<hr>";
  
      if ($acaoCad == "recuperarColheita") {
          echo '<a class="waves-effect waves-light btn" style="background-color: #317531;" href="index.php?link=12&acaoCad=recuperar">Plantados</a>';
      } else {
          echo '<a class="waves-effect waves-light btn" style="background-color:#D1451B;" href="index.php?link=12&acaoCad=recuperarColheita">Colhidos</a>';
      }
  
      echo "<hr>";

        if (!empty($cadastro)) {

            echo '
            <table class = "highlight">
            <thead>
            <tr>
            <th>Nome Plantação</th>
            <th>Status</th>
            <th>Excluir</th>
            </tr>
            </thead>

            <tbody>

            ';

            foreach ($cadastro as $cadastro) {

            echo '
            <tr>
            <td>'.$cadastro->nomePlanta.'</td>
            <td>'.$cadastro->status.'</td>

            <td><a class="waves-effect waves-light btn" id="cor"  href="confirmar1.php?&id='.$cadastro->id.'&acaoCad=excluir1"><i class="large material-icons">delete</i></a></td>

            </tr>

            ';

            }

            echo ' </tbody>
            </table>';

        } else 

        {
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


    }





?>

