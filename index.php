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

      <link rel="shortcut icon" href="imagem/logo.jpg">

      <title>Private Agro</title>
      <style>

        html,body {

        font-family: "light italic";
        color: #ffffff;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;

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
          padding: 5px;
          border-radius: 5px;
        }
        
        .card-action{
          height: 60px;
          color: #000000;
        }
        
        .card-content {
          height: 130px;
        }

        .msg{
          font-size: 50px;
          font-family: "light italic";
          color: #000000;
          margin: 20px;
        }

        .la,.modal-content{
          font-size: 20px;
          color: #000000;
        }

        
 
      

        </style>
                                                                                                                                                                         
    </head>
    <body background = "imagem/telainicial.jpg"> 
    
    <?php require_once 'nav.php';?>

 <div class="row">
   <div class="msg">
     <center>
      <p>Bem-vindo ao PrivateAgro</p>
     </center>
   </div>
      <div class="col s12 m12 l12">
		<div class="row">
        <div class="col s12 m12 l4">
        <div class="container barra">
          <div class="card">
            <div class="card-image">
            <img src="imagem/card1.jpg">
            <span class="card-title">Gestão da Plantação</span>
            </div>
            <div class="card-content">
            <h5>Guardar a quantidade de sementes ou mudas plantadas, ou ainda ver a previsão do plantio.</h5>
            </div>
            <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal1">SAIBA MAIS</a>
            <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>Como utilizar a gestão de plantação?</h4>
                <div class="la">
                <p>Nessa função, escolher a opção sementes ou mudas, e preencher os dados corretamente. O site armazenará os dados, que podem ser consultados depois, e utilizará eles em outros métodos como na Gestão de Lucros</p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Sair</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      
        <div class="col s12 m12 l4">
        <div class="container barra">
          <div class="card">
            <div class="card-image">
            <img src="imagem/gastos.jpg">
            <span class="card-title">Gestão da Gastos</span>
            </div>
            <div class="card-content">
            <h5>Controlar as despesas feitas para a produção do plantio.</h5>
            </div>
            <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal2">SAIBA MAIS</a>
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h4>Como utilizar a gestão de plantação?</h4>
                <div class="la">
                  <p></p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Sair</a>
              </div>
            </div> 
            </div>
          </div>
        </div>
        </div>

        <div class="col s12 m12 l4">
        <div class="container barra">
          <div class="card">
            <div class="card-image">
            <img src="imagem/lucros.jpg">
            <span class="card-title">Tabela de Lucros</span>
            </div>
            <div class="card-content">
            <h5>Comparar os gastos com lucros em relação aos preços de mercado.</h5>
            </div>
            <div class="card-action">
            <a class="waves-effect waves-light modal-trigger" href="#modal3">SAIBA MAIS</a>
            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>Como utilizar a gestão de plantação?</h4>
                <div class="la">
                  <p></p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Sair</a>
              </div>
            </div>
            </div>
          </div>
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
          $('.modal').modal();
          });
          $('#modal1').modal('open');
          $('#modal1').modal('close');

          $(document).ready(function(){
          $('.modal').modal();
          });
          $('#modal2').modal('open');
          $('#modal2').modal('close');

          $(document).ready(function(){
          $('.modal').modal();
          });
          $('#modal3').modal('open');
          $('#modal3').modal('close');

          $(document).ready(function(){
          $('.modal').modal();
          });
          $('#modal4').modal('open');
          $('#modal4').modal('close');
    </script>
  </html>