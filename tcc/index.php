<?php

  session_start();
  if(!isset($_SESSION["username"])) {
    header('location: ../login/login.php');
  }

?> 

<!DOCTYPE html>

  <html>

    <head>

    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="css/index_tcc.css">

      <style>

      </style>

    </head>
    
    <body background = "../imagem/terra.webp">

        <?php
            require_once 'navtcc.php';

        ?>
          
              <div class="row">
                <div class="col s12 m4 l3 barra"> 
                  <ul class="collapsible " data-collapsible="accordion">
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Cadastro da plantação</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para fazer <br> seu cadastro da plantação.</font></span>
                      <a class="btn right " href="index.php?link=2"></a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Gestão de gastos</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> sua gestão de gastos.</font></span>
                      <a class="btn right" href="index.php?link=2"></a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Previsão para a colheita</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> a previsão para a colheita.</font></span>
                      <a class="btn right" href="index.php?link=2"></a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Tabela de lucros</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> a tabela de lucros.</font></span>
                      <a class="btn right" href="index.php?link=2"></a>
                    </div>
                    </li>
                  </ul>
                </div>

                <div class="col s12 m8 l9 white">

                    <?php

                      $link = @$_GET['link'];
                      $pag[1]='principal.php';
                      $pag[2]='cad_plant.php';
                      $pag[3]='gestao.php';
                      $pag[4]='previsao.php';
                      $pag[5]='lucros.php';
                      
                      if(!empty($link)) {
                        if (file_exists($pag[$link])) {
                          include $pag[$link];
                        }
                      } else {
                        trim(include "principal.php");
                      }
                    
                    ?>


                 </div>
              </div>



    </body>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    
            <script>
               $(document).ready(function(){
                $('.collapsible').collapsible();
                });

                $(document).ready(function(){
                    $('.slider').slider();
                  });

                // Pause slider
                $('.slider').slider('pause');
                // Start slider
                $('.slider').slider('start');
                // Next slide
                $('.slider').slider('next');
                // Previous slide
                $('.slider').slider('prev');
                
            </script>

</html>