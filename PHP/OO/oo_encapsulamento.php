<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value) >= 3) {
                $this->nome = $value;
            }
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {

            if(strlen($value) >= 3) {
                $this->sobrenome = $value;
            }
        }
    }

    $pai = new Pai();
    echo $pai->getNome();
?>