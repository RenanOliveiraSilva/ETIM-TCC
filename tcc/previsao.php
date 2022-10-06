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
<<<<<<< HEAD
            <a href="index.php?link=9&acaoCad=recuperarPlantacao&id='.$cadastro->id.'&data='.$data->format('Y-m-d').'">DATA PARA COLHEITA</a>
=======
            <a href="index.php?link=9&acaoCad=recuperar&id='.$cadastro->id.'&data='.$data->format('Y-m-d').'">DATA PARA COLHEITA</a>
>>>>>>> ccd6d69ff4c8a08d2a21975f35a4fdc348682eae
          </div>
        </div>
      </div>
    </div>';
  } 

?>

