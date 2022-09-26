<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";


    echo "<h4><blockquote>Lista de Plantações</blockquote></h4>";
    echo "<hr>";

    foreach($cadastro as $cadastro) {
      $data = new DateTime($cadastro->data_plantada);
      $data->add(new DateInterval ('P'.$cadastro->tempo.'D'));
      

     echo '<div class="col s12 m6 l4">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <p><b>'.strtoupper($cadastro->nomePlanta).'</b></p>
            <p>Plantado em: '.$cadastro->data_plantada.'</p>
          </div>
          <div class="card-action">
            <a href="index.php?link=9&acaoCad=recuperar&id='.$cadastro->id.'&data='.$data->format('Y-m-d').'">DATA PARA COLHEITA</a>
          </div>
        </div>
      </div>
    </div>';
  } 

?>

