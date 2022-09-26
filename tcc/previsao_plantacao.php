<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";

    $id = $_GET['id'];
    $data = $_GET['data'];

    foreach ($cadastro as $cadastro)
    {
        $nomePlanta = $cadastro->nomePlanta;
        $tipo = $cadastro->tipo;
        $qtdPlantada = $cadastro->qtdPlantada;
        $tempo = $cadastro->tempo;
        $data_plantada = $cadastro->data_plantada;
        $data_colheita = $cadastro->data_colheita;

    }
    
    echo "<blockquote><h4>Previsão para Colheita</h4></blockquote>";
    echo "<hr>";
    

    if (empty($data_colheita))
    {
        include "calcular.php";        
    } else
    {
        $dateStart = new \DateTime($data_colheita);
        $dateNow   = new \DateTime(date('Y-m-d'));

        $dateDiff = $dateStart->diff($dateNow);

        echo '
            <ul class="collection with-header">
                <li class="collection-header"><h5>Planta Selecionada: '.$nomePlanta.' </h5></li>
                <li class="collection-item"><b>Data Plantada: </b>'.$data_plantada.'</li>
                <li class="collection-item"><b>Data Para Colheita: </b>'.$data_colheita.'</li>
                <li class="collection-item"><b>Tempo Total: </b>'.$tempo.' dias</li>
                <li class="collection-item"><b>Tempo Restante(s) </b>'.$dateDiff->days.' dias</li>
            </ul>';
    }



     
?>



