<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";

    $id = $_GET['id'];
    $data = $_GET['data'];


    echo "<blockquote><h4>Previsão para Colheita</h4></blockquote>";
    echo "<hr>";

    foreach ($cadastro as $cadastro)
    {

        if (empty($cadastro->data_colheita))
        {
            include "calcular.php"; 
        } else
        {

            $dateStart = new \DateTime($cadastro->data_colheita);
            $dateNow   = new \DateTime(date('Y-m-d'));
    
            $dateDiff = $dateStart->diff($dateNow);

            if ($dateDiff->days == 0) {
                echo '
                <ul class="collection with-header">
                    <li class="collection-header"><h5>Planta Selecionada: '.$cadastro->nomePlanta.' </h5></li>
                    <li class="collection-item"><b>Data Plantada: </b>'.$cadastro->data_plantada.'</li>
                    <li class="collection-item"><b>Data Para Colheita: </b>'.$cadastro->data_colheita.'</li>
                    <li class="collection-item"><b>Tempo Total: </b>'.$cadastro->tempo.' dias</li>
                    <li class="collection-item"><b>Data da Colheita Atingida </b></li>
                </ul>';    
            } else {
                echo '
                <ul class="collection with-header">
                    <li class="collection-header"><h5>Planta Selecionada: '.$cadastro->nomePlanta.' </h5></li>
                    <li class="collection-item"><b>Data Plantada: </b>'.$cadastro->data_plantada.'</li>
                    <li class="collection-item"><b>Data Para Colheita: </b>'.$cadastro->data_colheita.'</li>
                    <li class="collection-item"><b>Tempo Total: </b>'.$cadastro->tempo.' dias</li>
                    <li class="collection-item"><b>Tempo Restante(s): </b>'.$dateDiff->days.' dias</li>
                </ul>';    
            }



        }

    }




?>



