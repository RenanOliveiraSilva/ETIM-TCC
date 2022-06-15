<?php

    class Conexao {
        
        private $host = "localhost";
        private $dbname = "privateagro";
        private $user = "root";
        private $senha = "";

        public function conectar() {
            try 
            {
                $conexao = new PDO("mysql:host=$this->host;bdname=$this->dbname",
                    "$this->user",
                    "$this->senha",
                );
                return $conexao;
            } 
            catch (PDOException $e)
            {
				echo $e->getMessage();
            }
        }

    }

    $con = new Conexao();
    $con->conectar();





?>