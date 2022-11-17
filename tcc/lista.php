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

    echo "<h4><blockquote>Lista de Plantações</blockquote></h4>";
    echo "<hr>";

    if ($acaoCad == "recuperarColheita") {
        echo '<a class="waves-effect waves-light btn" href="index.php?link=12&acaoCad=recuperar"><i class="material-icons left">cloud</i>button</a>';
    } else {
        echo '<a class="waves-effect waves-light btn" href="index.php?link=12&acaoCad=recuperarColheita"><i class="material-icons left">cloud</i>button</a>';
    }


    echo "<hr>";

    $modo = "p";

    if ($acaoCad == "recuperar" ) {


        if (!empty($cadastro)) {

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

            foreach ($cadastro as $cadastro) {

                echo '
                <tr>
                <td>'.$cadastro->nomePlanta.'</td>
                <td>'.$cadastro->status.'</td>
                <td><a class="waves-effect waves-light btn" href="../controller/cadastro.controller.php?acaoCad=guardar&id='.$cadastro->id.'"><i class="material-icons">assignment</i></a></td>

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

    }   else

    {

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
            <td><a class="waves-effect waves-light btn" id="cor"  href="confirmar1.php?&id='.$cadastro->id.'&acaoCad=excluir1"><i class="large material-icons">delete</i>Excluir</a></td>
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

