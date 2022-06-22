<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style.css">
    
    <script src="../script.js" defer></script>
    
    <title>Riot Games</title>
    </head>

  <body>

    <?php 
      if(!empty($login_erro)){
        ?><div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $login_erro; ?>
      </div><?php
      }
    ?>

    <main>
      <section class="login">
        <div class="wrapper">

          <img src="./images/logo.png" class="login__logo">
          <h1 class="login__tittle">Fazer Login</h1>

          <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post" >
            <label class="login__label">

              <span>Nome de Usuário</span>
              <input type="text" name="usuario" class="input <?php echo (!empty($user_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $usuario; ?>">
              <span class="invalid-feedback"><?php echo $user_erro; ?></span>

            </label>

            <label class="login__label">

              <span>Senha</span>
              <input type="password" name="senha" class="input <?php echo (!empty($pass_erro)) ? 'is-invalid' : ''; ?>" value="<?php echo $senha; ?>">
              <span class="invalid-feedback"><?php echo $pass_erro; ?></span>

            </label>

            <div class="form-group">
              <input type="submit" class="btn-large" value="Entrar">
            </div>            
        </form>

      


          <a href="register.php" class="login__link">Criar Conta</a>

        </div>
      </section>
    </main>

        </body>

</html>