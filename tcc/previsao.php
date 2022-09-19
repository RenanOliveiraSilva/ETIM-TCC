<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";


    echo "<h4><blockquote>Lista de Plantações</blockquote></h4>";
    echo "<hr>";

    foreach($cadastro as $cadastro) { 
     echo '<div class="col s12 m6 l4">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <p><b>'.strtoupper($cadastro->nomePlanta).'</b></p>
            <p>Plantado em: '.$cadastro->data_plantada.'</p>
          </div>
          <div class="card-action">
            <a href="index.php?link=9&id='.$cadastro->id.'&acaocad=previsao">DATA PARA COLHEITA</a>
          </div>
        </div>
      </div>
    </div>';
  } 

?>

