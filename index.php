<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <title>Private Agro</title>
      <style>
        html,body {
          font-family: "light italic";
          color: #ffffff;
        }

        nav {
          background:#753F2D;
        }
        .nav-mobile{
          list-style: none;
          display: flex;
          column-gap: 20px;
        }
        .linha{
          display: inline-block;
          text-decoration: none;
          color: #ffffff;
          position: relative;
        }
        .linha::after{
          content: '';
          position: absolute;
          left: 0;bottom: 0;
          width: 100%;height: 2px;
          background-color: #16A56B;
          transform: scaleX(0);
          transform-origin: right;
          transition: transform .5s;
        }
        .linha:hover::after{
          transform: scaleX(1);
          transform-origin: left;
        }
        
        
        h5 {
          color: #000000;
        }

        .card {
          height: 500px;
        }
        
        .card-action{
          height: 60px;
        }
        
        .card-content {
          height: 130px;
        }

        .titulo {
          margin: 10px;
          height: 400px;
          padding: 20px;
        }


        </style>
                                                                                                                                                                         
    </head>
    <body background = "imagem/telainicial.png"> 
    
    <?php require_once 'nav.php';?>


        <div class="row">
          <div class="titulo col l12">
            <div class="center">
              <h1><p>Com Private Agro</p><p>Sua Fazenda Rende Mais</p></h1>
            </div>
          </div>
        </div>

      <div class="row">
          <div class="col s4 m4 l4">
            <div class="container barra">
                  <div class="card">
                    <div class="card-image">
                      <img src="imagem/card1.jpg">
                      <span class="card-title">Gest??o da Planta????o</span>
                    </div>
                    <div class="card-content">
                      <h5>Guardar a quantidade de sementes ou mudas plantadas, ou ainda ver a previs??o do plantio.</h5>
                    </div>
                    <div class="card-action">
                      <a href="https://www.youtube.com/">SAIBA MAIS</a> <a href="#"> <!-- <i class="tiny material-icons">arrow_forward</i> </a> -->
                    </div>
                  </div>
              </div>
          </div>
          <div class="col s4 m4 l4">
            <div class="container barra">
                  <div class="card">
                    <div class="card-image">
                      <img src="imagem/gastos.jpg">
                      <span class="card-title">Gest??o da Gastos</span>
                    </div>
                    <div class="card-content">
                      <h5>Controlar as despesas feitas para a produ????o do plantio.</h5>
                    </div>
                    <div class="card-action">
                      <a href="#">SAIBA MAIS</a> <a href="#"> <!-- <i class="tiny material-icons">arrow_forward</i> </a> -->
                    </div>
                  </div>
              </div>
          </div>
          <div class="col s4 m4 l4">
            <div class="container barra">
                  <div class="card">
                    <div class="card-image">
                      <img src="imagem/lucros.jpg">
                      <span class="card-title">Tabela de Lucros</span>
                    </div>
                    <div class="card-content">
                    <h5>Comparar os gastos com lucros em rela????o aos pre??os de mercado.</h5>
                    </div>
                    <div class="card-action">
                      <a href="#">SAIBA MAIS</a>
                    </div>
                  </div>
            </div>
          </div>
        </div>

    </body>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>     
        $(document).ready(function(){
        $('.carousel').carousel();
        });
    </script>
  </html>