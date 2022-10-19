<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="shortcut icon" href="imagem/logo.jpg">

      <title>Contato</title>

        <style>
            html,body{
                background:#4d2619; 
            }
            nav{
            background:#753F2D;
            font-family: "light italic";
            color: #ffffff;
          }
        </style>

    </head>
    <body >
    <nav>
    <div class="nav-wrapper">
      <a  class="brand-logo "><font size="7">PrivateAgro</font></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li><a href="../Tcc/index.php"><font size="5">Voltar ao início</font></a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <form action="enviar.php" name="form_contato" method="post">
     <div class="card lime lighten-5">
     <div class="card-content black-text">
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input placeholder="Seu nome completo" id="nome" type="text" name ="nome" class="validate" data-length="50" required="">
          <label for="nome">Nome completo</label>
        </div>
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input placeholder="exemplo@exemplo.com" id="email" name ="email" type="email" class="validate" data-length="75" required="">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l6 m6">
          <input placeholder="Digite sua mensagem" id="texto" name ="msg" type="text" class="validate" data-length="200" required="">
          <label for="texto">Mensagem</label>
        </div>
      </div>
     </div>
     <input type="submit" class="campo_submit" value="Enviar">
     </div>
    </form>
  </div>

    </body>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </html>

