<!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../style.css"> -->
    
    <!-- <script src="../script.js" defer></script> -->

    <style>

@import url('https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700&display=swap');

* {

    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Lexend Deca", sans-serif;

}

main {
    display: flex;
}

:root {

    --white: #FFF;
    --whitesmoke: #F9F9F9;
    --light-grey: #ECECEC;
    --grey: #C4C4C4;
    --medium-grey: #A7A7A7;
    --deep-grey: #343434;
    --black: #000000;
    --red: #CF3C3F;
    --green: #006600;

}

.cadastro {
    width: 100%;
}

.login {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    max-width: 500px;
    min-height: 100vh;
    padding: clamp(35px, 8%, 5px);
}

.wrapper {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.form {
  margin: 0px;
}

.close__button {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--white);
    border: none;
    cursor: pointer;
}

.close__button:hover {
    rotate: 90deg;
    transform: all 200ms ease;
}

.login__tittle{
    color: var(--green);
    font-size: 1.5em;
    margin-bottom: 30px;
}

.login__logo{
    width: 200px;
    margin-bottom: 50px;

}

.login__label{
    display: block;
    margin-bottom: 20px;
    width: 100%;
}

.input{
    width: 100%;
    border: 2px solid rgba(0, 0, 0, 0);
    background-color: var(--light-grey);
    border-radius: 5px;
    outline: none;
    font-size: 0.9em;
    padding: 25px 10px 10px;
    font-weight: 600;
    color: var(--deep-grey);

}

.login__label span {
    position: absolute;
    font-size: 0.8em;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--medium-grey);
    margin: 20px;
    cursor: text;
    transition: all 200ms ease;
}

.input:focus {
    background-color: var(--whitesmoke);
    border: 2px solid var(--deep-grey);
}

.login__label .span-active{
    font-size: 0.7em;
    margin: 8px 10px;
}

.login__icons {
    display: flex;
    gap: 10px;
    margin-top: 20px;
    width: 100%;

}

.login__icons img {
    width: 20px;
}

.icons__button {
    width: 33.33%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 35px;
    border-radius: 5px;
    cursor: pointer;
    border: none;

  }

.login__icons .icons__button:nth-child(1) {
    background-color: var(--blue);
}

.login__icons .icons__button:nth-child(2) {
    background-color: var(--light-grey);
}

.login__icons .icons__button:nth-child(3) {
    background-color: var(--black);
}

.login__label--checkbox {
    width: 100%;
    margin: 15px 0 50px;
    font-size: 0.9em;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.input--checkbox {
    appearance: none;
    width: 20px;
    height: 20px;
    background-color: var(--light-grey);
    margin-right: 8px;
    border-radius: 3px;

}

.input--checkbox:checked {
    background-color: var(--red);

}

.input--checkbox:checked::after {
    content:  "";
    display: block;
    width: 5px;
    height: 10px;
    border: 3px solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
    margin: 2px 6px;
    
}

.login__button {
    width: 60px;
    height: 60px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--green);
    border-radius: 20px;
    border: none;
    cursor: pointer;
    margin-bottom: 60px;

}

.login__button svg {
    fill: white;
}

.login__button:disabled {
    cursor: auto;
    background-color: white;
    border: 2px solid var(--light-grey)

}

.login__button:disabled svg {
    fill: var(--grey);
}

.login__link {
    font-size: 0.8em;
    text-decoration: none;
    color: var(--medium-grey);
    text-transform: uppercase;
    margin-bottom: 5px;
    font-weight: 700;
}

.login__link:hover {
    color: var(--green);
}

.wallpaper {
    width: 100%;
    background-image: url('../imagem/wallpaper.jpg');
    background-size: cover;
    background-position: center;
    flex: 1;
  }

    </style>
    
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

      <div class="close">
        <button type="submit" class = "close__button">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="48" height="48"
          viewBox="0 0 48 48"
          style=" fill:#000000;"><path fill="#F4  4336" d="M21.5 4.5H26.501V43.5H21.5z" transform="rotate(45.001 24 24)"></path><path fill="#F44336" d="M21.5 4.5H26.5V43.501H21.5z" transform="rotate(135.008 24 24)"></path>
        </svg>
      </div>

        <div class="wrapper">

          <img src="../imagem/logo.jpg" class="login__logo">
          <h1 class="login__tittle">Fazer Login</h1>

          <form class = "cadastro" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post" >
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

        <script>
          const inputs = document.querySelectorAll('.input');
const button = document.querySelector('.login__button');

const handleFocus = ({ target }) => {
  const span = target.previousElementSibling;
  span.classList.add('span-active');
}

const handleFocusOut = ({ target }) => {
  if (target.value === '') {
    const span = target.previousElementSibling;
    span.classList.remove('span-active');
  }
}

const handleChange = () => {
  const [username, password] = inputs;

  if (username.value && password.value.length >= 5) {
    button.removeAttribute('disabled');
  } else {
    button.setAttribute('disabled', '');
  }
} 

inputs.forEach((input) => input.addEventListener('focus', handleFocus));
inputs.forEach((input) => input.addEventListener('focusout', handleFocusOut));
inputs.forEach((input) => input.addEventListener('input', handleChange));
        </script>

</html>