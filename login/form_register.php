<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
          html,body {
  font-family: "light italic";
  font-size: 18px;
  font-weight: 300;
  
}

.card{
  background-color: #E5ECF1;
  left: 50%;
  top: 195px;
}
.btn-large{
  display: inline-block;
  font-size: 18px;
  text-align: center;
  border: 0;
  border-radius: 64px;
  padding: 2px 10px;
  color: #ffffff;
  background-color: #A4A820 ;
  cursor: pointer;
  overflow: hidden;
  transform: translate(0);
}
.btn-large::before{
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(90deg, #A4A820,  #A1BB11);
  transition: 0.4s ease;
  transform: scaleX(0);
  transform-origin: 100% 0%;
}
.btn-large:hover::before{
  transform: scaleX(1.1) scaleY(1.1);
}
h2{
  margin: 15px;
  margin-top: 15px;
}
p{
  font-size: 20px;
  font-family: "light italic";
  margin: 10px;
}


        </style>

    </head>
<body background = "../imagem/cadastro.jpg">
  <div class = "container">
    <div class="row">
      <div class="col s6 m6">
        <div class="card">
  <h2>Criar conta</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="input-field col s12 m12 l12">
          <label>Nome do usuário</label>
          <input type="text" name="usuario" class="form-control <?php echo (!empty($user_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $usuario; ?>" data-length="25">
          <span class="invalid-feedback"><?php echo $user_erro; ?></span>
        </div>    
        <div class="input-field col s12 m12 l12">
          <label>Senha</label>
          <input type="password" name="senha" class="form-control <?php echo (!empty($pass_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $pass; ?>" data-length="15">
          <span class="invalid-feedback"><?php echo $pass_erro; ?></span>
        </div>
        <div class="input-field col s12 m12 l12">
          <label>Confirme a senha</label>
          <input type="password" name="pass_confirm" class="form-control <?php echo (!empty($confirm_pass_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $pass_confirm; ?>" data-length="15">
          <span class="invalid-feedback"><?php echo $confirm_pass_erro; ?></span>
        </div>
        <div class="input-field col s12 m12 l12">
          <input type="submit" class="btn-large" value="Criar Conta">
          <input type="reset" class="btn-large" value="Apagar Dados">
      </div>
      <p> Já tem uma conta? <a href="login.php">Entre aqui</a></p>
    </form>
    </div>
    </div>
    </div>
  </div>

</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</html>