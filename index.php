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

      <style>
        html,body {
          font-family: "light italic";
          color: #ffffff;
        }

        nav {
          background:#753F2D;
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
          height: 300px;
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
                      <img src="../Tcc/imagem/card1.jpg">
                      <span class="card-title">Gestão da Plantação</span>
                    </div>
                    <div class="card-content">
                      <h5>Guardar a quantidade de sementes ou mudas plantadas, ou ainda ver a previsão do plantio.</h5>
                    </div>
                    <div class="card-action">
                      <a href="saibamais.html">SAIBA MAIS</a> <!-- <i class="tiny material-icons">arrow_forward</i> </a> -->
                    </div>
                  </div>
              </div>
          </div>
          <div class="col s4 m4 l4">
            <div class="container barra">
                  <div class="card">
                    <div class="card-image">
                      <img src="../Tcc/imagem/gastos.jpg">
                      <span class="card-title">Gestão da Gastos</span>
                    </div>
                    <div class="card-content">
                      <h5>Controlar as despesas feitas para a produção do plantio.</h5>
                    </div>
                    <div class="card-action">
                      <a href="saibamais.html">SAIBA MAIS</a> <!-- <i class="tiny material-icons">arrow_forward</i> </a> -->
                    </div>
                  </div>
              </div>
          </div>
          <div class="col s4 m4 l4">
            <div class="container barra">
                  <div class="card">
                    <div class="card-image">
                      <img src="../Tcc/imagem/lucros.jpg">
                      <span class="card-title">Tabela de Lucros</span>
                    </div>
                    <div class="card-content">
                    <h5>Comparar os gastos, com lucros em relação aos preços de mercado.</h5>
                    </div>
                    <div class="card-action">
                      <a href="saibamais.html">SAIBA MAIS</a>
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