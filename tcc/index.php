<?php 
  session_start();
  if(!isset($_SESSION["username"])) {
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


      <style>

          html,body {
            font-family: "light italic";
            font-size: 18px;
            
        
          }
         nav {
            background:#753F2D;
          }
          .btn{
            text-decoration: none;
            font-size: 15px;
            color: #000000;
            padding: 0px 15px;
            border: 3px solid #1fe8b6;
            position: relative;
          }
          .btn::before,
          .btn::after{
            content: "";
            position: absolute;
            width: 40px;
            height: 40px;
            border: inherit;
            transition: all .5s;
          }
          .btn::before{
            top: -15px;
            left: -15px;
            border-width: 3px 0 0 3px;
          }
          .btn::after{
            bottom: -15px;
            right: -15px;
            border-width: 0 3px 3px 0;
          }
          .btn:hover::before,
          .btn:hover::after{
            width: calc(100% + 27px);
            height: calc(100% + 27px);
          }
      </style>

    </head>
    
    <body >

        <?php



            require_once 'navtcc.php';
        ?>

              <div class="row">
                <div class="col s12 m4 l3"> 
                  <ul class="collapsible " data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header active">Cadastro da plantação</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
                      <a class="btn right " href = "cad_plant.php">button</a>
                    </div>
                    </li>
                    <li>
                      <div class="collapsible-header active">Second</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                    <li>
                      <div class="collapsible-header active">Third</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                    <li>
                      <div class="collapsible-header active">Third</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span>
                      <a class="btn right">button</a>
                    </div>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m8 l9">
                <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
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

            </script>

</html>