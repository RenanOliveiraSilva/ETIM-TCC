<?php

    class UsersService {
        private $users;
        private $conexao;

        public function __construct(Users $users, Conexao $conexao)
        {
            $this->users = $users;
            $this->conexao = $conexao->conectar();
        }


        public function inserir($id) 
        {
            $query = "update users set tarifa=:tarifa where id=:id";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue('tarifa', $this->users->__get('tarifa'));
            $stmt->bindValue('id', $id);

            $stmt->execute();
        }

        public function recuperar($id) 
        {
            $query = "select * from users where id = :id";

            $stmt = $this->conexao->prepare($query);
            
            $stmt->bindValue('id', $id);

            $stmt->execute();

            return $stmt->fetchALL(PDO::FETCH_OBJ);
        }


    }



?>