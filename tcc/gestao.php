<?php

    require_once "../controller/users.controller.php";
    require_once "../controller/cadastro.controller.php";


    foreach ($users as $users)
    {
        $id=$users->id;
        $username=$users->username;
        $password=$users->password;
        $data=$users->data;
        $tarifa=$users->tarifa;
    }


    $retorno = [];

    foreach($cadastro as $indice => $cadastro)
    {
        array_push($retorno, $cadastro->nomePlanta);
    }
    

    if (empty($tarifa)) 
    {
        echo '<script>alert("Para a gestão de gasto cadastre as informações");</script> 
        ';
        
        include_once "tarifa_form.php";
    }

?>
    <table class ="striped">
    <thead>
      <tr>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Irrigacões</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
      </tr>
      <tr>
        <td>Alan</td>
        <td>Jellybean</td>
        <td>$3.76</td>
      </tr>
      <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>$7.00</td>
      </tr>
    </tbody>
  </table>

