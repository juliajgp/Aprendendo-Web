<?php
    //definir modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        /*
        //setters
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        //getters
        function getNome () {
            return $this->nome;
        }
        function getTelefone () {
            return $this->telefone;
        }
        function getNumFilhos () {
            return $this->numFilhos;
        }
        */

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    //$y->setNome('Júlia');
    $y->__set('nome', 'Júlia');
    //$y->setNumFilhos(4);
    $y->__set('numFilhos', 7);
    echo $y->resumirCadFunc();
    echo '<br>';
    //echo $y->getNome();
    echo $y->__get('nome');

    echo '<br>';
    echo '<hr>';

    //$x = new Funcionario();
    //echo $x->resumirCadFunc();
?>