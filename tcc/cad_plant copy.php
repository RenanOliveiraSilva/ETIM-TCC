<!DOCTYPE html>

  <html>

    <head>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--       <link rel="stylesheet" href="cad_plantcss.css">
 -->
 <!-- 
        <style>
          .container {
    background-color: lightblue;
    padding: 20px 40px;
    border-radius: 5px;
    font-family: sans-serif;
}

/* p{
  font-size: 30px;
}
 */
.btn-1 {
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: #FFFFFF;
    padding: 15px;
    font-size: 22px;
    border: 0;
    border-radius: 5px;
    }

.btn-1:focus {
    outline: 0;
}

.with-gap{
  background-color: #000000;
}

.btn-1:active {
    transform: scale(0.98);
}

.row {
    position: relative;
    margin: 20px 0 40px;
}

.row input {
    background-color: #AC0000;
    border: 0;
    border-bottom: 2px #000000 solid;
    display: block;
    width: 100px;
    padding: 15px 0;
    font-size: 18px;
    color: #000000;
}

.row input:focus,
.row input:valid {
    outline: 0;
    border-bottom-color: #000000;
}

.row label {
    position: absolute;
    top: 15px;
    left: 0;
}

.row label span {
    display: inline-block;
    font-size: 28px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.row input:focus+label span,
.row input:valid+label span {
    color: #FFFFFF;
    transform: translateY(-30px);
}
.input-field{
  color: #000000;
} 
        </style>


 -->


    </head>
    <body>
<div class="container">
    <div class="row">
        <h1>Cadastro de plantação</h1>
        <form class="col s12">
        <div class="row">
                    <p><font size="6">Tipo</font></p>
                    <p>
                  <input class="with-gap" name="group1" type="radio" id="planta" />
                  <label for="planta"><font size="4">Planta</font></label>&emsp;&emsp;
                  <input class="with-gap" name="group1" type="radio" id="muda" />
                  <label for="muda"><font size="4">Muda</font></label>
                </p>
            <div class="input-field col s12">
            <input id="nome_planta" type="text" class="validate">
            <label for="nome_planta"><font size="3">Nome da Planta ou Muda</font></label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="qtdPlantada" type="number" class="validate">
          <label for="qtdPlantada"><font size="3">Quantidade Plantada</font></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="tempo" type="number" class="validate">
          <label for="tempo"><font size="3">Tempo do Plantio</font></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="tamanho" type="number" class="validate">
          <label for="tamanho"><font size="3">Tamanho do Plantio</font></label>
        </div>
      </div>
      <a class="btn-1" href="#"><center><font size="5">Enviar dados</font></center></a>
        </form>
    </div>
</div>

  </body>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    
            <script>
            </script>

</html>