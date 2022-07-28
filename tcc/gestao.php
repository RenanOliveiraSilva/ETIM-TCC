<?php

    $op = 0;

    
    if (!isset($tarifa)) {
		echo '
			<script>alert("Para a gestão de gasto cadastre as informações");</script>
			<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php?link=6">
		';

        $op = 1;
    }




?>