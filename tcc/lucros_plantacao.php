<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";

    $id = $_GET['id'];

    foreach ($cadastro as $cadastro)
    
    {
        if ($cadastro->lucro >= 0) {
            $p = "Lucro";
            $b = "background-color:#317531;";
        } else {
            $p = "Gasto";
            $b = "background-color:#D1451B;";
        }

        if ($cadastro->lucro == 0)
        {
            echo "<blockquote><h4>Insira o Lucro da Plantação</h4></blockquote>";
            echo "<hr>";

            include "cadastro_lucro.php"; 
        } else
        {
            echo "<blockquote><h4>Consulta de Lucros</h4></blockquote>";
            echo "<hr>";

            echo '
            <ul class="collection with-header">
                <li class="collection-header"><h5>Planta Selecionada: '.$cadastro->nomePlanta.' </h5></li>
                <li class="collection-item" style="background-color:#D1451B;" ><b>Despesas Geradas: </b> R$'.$cadastro->gastos.'</li>
                <li class="collection-item" style="'.$b.'"><b>'.$p.':</b> R$'.$cadastro->lucro.'</li>
            </ul>';
            
            if ($cadastro->lucro >= 0) {
                echo '<h5 class="green-text text-accent-4"> Essa Plantação obteve um Lucro Positivo</h5>';

            } else {
                echo '<h5 class="red-text text-accent-4"> Essa Plantação obteve um Lucro Negativo</h5>';

            }

        }

    }




?>



