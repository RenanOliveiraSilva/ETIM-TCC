<?php

    class UsersService {
        private $users;
        private $conexao;

        public function __construct(Users $users, Conexao $conexao)
        {
            $this->users = $users;
            $this->conexao = $conexao->conectar();
        }


        public function inserir($id_users) 
        {
            $query = "update users set tarifa=:tarifa where id=:id";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue('tarifa', $this->users->__get('tarifa'));
            $stmt->bindValue('id', $id_users);

            $stmt->execute();
        }

        public function recuperar($id_users) 
        {
            $query = "select * from users where id = :id";

            $stmt = $this->conexao->prepare($query);
            
            $stmt->bindValue('id', $id_users);
            $stmt->execute();
            return $stmt->fetchALL(PDO::FETCH_OBJ);
        }


    }



?>