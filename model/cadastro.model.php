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
        private $irrigacao;
        private $p_irrigacao;
        private $p_tipo;
        private $p_fertilizante;
        private $gastos;
        private $status;

        
        public function __set($atributo,$valor){
            $this->$atributo = $valor;
            return $this;
        }
        public function __get($atributo){
            return $this->$atributo;
        }
    }


    

?>