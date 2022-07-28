<?php

    class TarifaService {
        private $tarifa;
        private $conexao;

        public function __construct(Tarifa $tarifa, Conexao $conexao)
        {
            $this->tarifa = $tarifa;
            $this->conexao = $conexao->conectar();
        }


        public function inserir() 
        {
            $query = "insert into tarifa (valor_tarifa) values (:valor_tarifa) where id_users = :id_users";

            $stmt = $this->conexao->prepare($query);

            $stmt->bindValue('valor_tarifa', $this->tarifa->__get('valor_tarifa'));

            $stmt->execute();
        }

        public function recuperar() 
        {
            $query = "select (valor_tarifa) from tarifa where id_users = :id_users";

            $stmt = $this->conexao->prepare($query);
            
            $stmt->bindValue('id_users', $this->tarifa->__get('id_users'));

            $stmt->execute();

            return $stmt->fetchALL(PDO::FETCH_OBJ);
        }


    }



?>