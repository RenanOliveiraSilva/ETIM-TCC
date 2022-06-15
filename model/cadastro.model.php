<?php 

    class Cadastro {
        private $id;
        private $id_users;
        private $nomePlanta;
        private $tipo;
        private $qtdPlantada;
        private $tempo;
        private $data_plantada;
        private $data_colheita;
        private $tamanho;
        private $correcao;
        
        public function __set($atributo,$valor){
            $this->$atributo = $valor;
            return $this;
        }
        public function __get($atributo){
            return $this->$atributo;
        }
    }




?>