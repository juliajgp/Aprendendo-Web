<?php

    namespace App\Models;

    use MF\Model\Model;

    class Tweet extends Model {
        private $id;
        private $id_usuario;
        private $tweet;
        private $data;

        public function __get($atributo) {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        //salvar
        public function salvar() {
            $query = "insert into tweets(id_usuario, tweet)";
        }

    }

?>