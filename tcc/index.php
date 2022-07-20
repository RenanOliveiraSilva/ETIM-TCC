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

      <link rel="stylesheet" href="index_tcc.css">

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
                      <a class="btn right " href="cad_plant.php">button</a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Gestão de gastos</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> sua gestão de gastos.</font></span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Previsão para a colheita</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> a previsão para a colheita.</font></span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                    <li class="li">
                      <div class="collapsible-header"><font size="5">Tabela de lucros</font></div>
                      <div class="collapsible-body"><span><font size="4">Clique aqui para ver <br> a tabela de lucros.</font></span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m8 l9">
                <div class="slider">
                  <ul class="slides">
                    <li>
                      <img src="../imagem/cadastro.jpg"> <!-- random image -->
                    </li>
                    <li>
                      <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                      <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                      <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                      </div>
                    </li>
                    <li>
                      <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                    </li>
                  </ul>
                </div>
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