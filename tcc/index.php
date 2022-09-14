<?php

  session_start();
  if(!isset($_SESSION["id"])) {
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
html,
body {
    font-family: "light italic";
    font-size: 18px;
    /* background-image: url(https://cdn.awsli.com.br/600x450/518/518209/produto/21442484/1f011ee42e.jpg); */
}

.barra {
    padding: 20px !important;
    height: 800px;
    margin-bottom: 50px;
    margin-left: 0px;
}

nav {
    background: #753F2D;
}

.nav-mobile {
    list-style: none;
    display: flex;
    column-gap: 20px;
}

.linha {
    display: inline-block;
    text-decoration: none;
    color: #ffffff;
    position: relative;
}

.linha::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background-color: #8A513E;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .5s;
}

.linha:hover::after {
    transform: scaleX(1);
    transform-origin: left;
}

li.li {
    width: auto;
    background-color: #fff;
    border-color: #009933;
    border-left: solid 10px #009933;
}

.content {
    margin-top: 30px;
    background-color: #fff;

}

.btn{

    background-color: #009933;
  
  }
  
  .btn:hover{
  
    background-color: #0BBB46;
  
  }
  
  
  
  blockquote{
  
    border-left: 5px solid #31B95F;
  
  }

  .btn{

    background-color: #14870c;
  
  }
  
  .btn:hover{
  
    background-color: #218e16;
  
  }
  
  
  
  #cor{
  
    background-color: #ff0000;
  
  }
  
  #cor:hover{
  
    background-color: #ff1d0b;
  
  }
  
  
  
  #alt{
  
    background-color: #DBDF03;
  
  }
  
  #alt:hover{
  
    background-color: #eaed25;
  
  }

  .vazio {

    background-color: #fff;
    height: 200px;

  }

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
                      <a class="btn right" href="index.php?link=3&acaoCad=recuperar"></a>
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

                <div class="col s12 m8 l9 content">

                    <?php

                      $link = @$_GET['link'];
                      $pag[1]='principal.php';
                      $pag[2]='cadastro_form.php';
                      $pag[3]='gestao.php';
                      $pag[4]='tarifa.php';
                      $pag[5]='gestao_plantacao.php';
                      $pag[6]='tarifa_form.php';
                      $pag[7]='gestao_form.php';
                      
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

/*                 $(document).ready(function(){
                    $('.slider').slider();
                  });

                // Pause slider
                $('.slider').slider('pause');
                // Start slider
                $('.slider').slider('start');
                // Next slide
                $('.slider').slider('next');
                // Previous slide
                $('.slider').slider('prev'); */

                $('.fixed-action-btn').openFAB();
                $('.fixed-action-btn').closeFAB();
                $('.fixed-action-btn.toolbar').openToolbar();
                $('.fixed-action-btn.toolbar').closeToolbar();

                
                
            </script>

</html>