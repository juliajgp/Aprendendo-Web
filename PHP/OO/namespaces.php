<?php

    namespace A;
    interface CadastroInterface {
        public function salvar();
    }

    class Cliente implements CadastroInterface {
        public $nome = 'Jorge';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar() {
            echo 'salvar';
        }
    }


    namespace B;
    interface CadastroInterface {
        public function remover();
    }

    class Cliente implements CadastroInterface {
        public $nome = 'Júlia';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }
        public function remover() {
            echo 'remover';
        }
    }

    $c = new \A\Cliente(); //acessa a classe cliente do namespace A, se não tiver o \A\ ali, ele vai automaticamente presumir que estamos ainda no namespace B.
    print_r($c);
    echo $c->__get('nome');
?>