<?php

    class tarifa {
        private $id;
        private $id_users;
        private $valor_tarifa;


        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
            return $this;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }

    }







?>