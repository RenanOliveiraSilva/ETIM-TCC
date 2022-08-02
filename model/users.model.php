<?php

    class Users {
        private $id;
        private $username;
        private $password;
        private $data;
        private $tarifa;


        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
            return $this;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }

    }







?>