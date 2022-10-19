<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="../style.css">
    
    <script src="../script.js" defer></script>
    
    <link rel="shortcut icon" href="../imagem/logo.jpg">

    <title>Entrar</title>
    </head>

  <body>


    <main>

      <section class="login">

      <div class="close">
        <a href="../index.php">
        <button type="submit" class = "close__button">

        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="48" height="48"
          viewBox="0 0 48 48"
          style=" fill:#000000;"><path fill="#F4  4336" d="M21.5 4.5H26.501V43.5H21.5z" transform="rotate(45.001 24 24)"></path><path fill="#F44336" d="M21.5 4.5H26.5V43.501H21.5z" transform="rotate(135.008 24 24)"></path>
        </svg>

        </a>
      </div>

        <div class="wrapper">

          <img src="../imagem/logo.jpg" class="login__logo">
          <h1 class="login__tittle">Fazer Login</h1>

          <?php 
            if(!empty($login_erro)){
            ?><div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">  <?php echo $login_erro; ?></span>

            </div><?php
            }
          ?>

          <form class = "cadastro" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post" >
            <label class="login__label">

              <span>Nome de Usuário</span>
              <input type="text" name="usuario" class="input <?php echo (!empty($user_erro)) ? 'is-invalid' : ''; ?>" value="<?php $usuario; ?>">
              <span class="invalid-feedback"><?php echo $user_erro; ?></span>

            </label>

            <label class="login__label">

              <span>Senha</span>
              <input type="password" name="senha" class="input <?php echo (!empty($pass_erro)) ? 'is-invalid' : ''; ?>" value="<?php $senha; ?>">
              <span class="invalid-feedback"><?php echo $pass_erro; ?></span>

            </label>

            <div class="wrapper">
              <button type="submit" class = "login__button" disabled>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/>
                  </svg>
            </div>            
        </form>

          <a href="register.php" class="login__link">Criar Conta</a>

        </div>
      </section>

      <section class="wallpaper"></section>

    </main>

        </body>


</html>