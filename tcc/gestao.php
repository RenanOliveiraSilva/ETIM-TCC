<?php

    require_once "../controller/users.controller.php";
    $acaoTar = "recuperar";

    foreach ($users as $users)
    {
        $id=$users->id;
        $username=$users->username;
        $password=$users->password;
        $data=$users->data;
        $tarifa=$users->tarifa;
    }

    if (isset($id)) {
        echo '<script>alert("Para a gestão de gasto cadastre as informações");</script>
              <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php?link=4">
        ';

    } 




?>