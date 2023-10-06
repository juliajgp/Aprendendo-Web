<?php
    //projeto 17
    class Dashboard {
        public $data_inicio;
        public $data_fim;
        public $numeroVendas;
        public $totalVendas;

        public function __get($atributo) {
            return $this->atributo;
        }
        public function __set($atributo, $valor) {
            $this->atributo = $valor;
            return $this;
        }
    }

    //classe de conexão com o BD
    class Conexao {
        private $host = 'localhost';
        private $dbname = 'dashboard'; //é aqui o erro
        private $user = 'root';
        private $pass = '';

        public function conectar() {
            try {

                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                $conexao->exec('set charset utf8');

                return $conexao;

            } catch(PDOException $e) {
                echo '<p>' . $e->getMessage() . '</p>';
            }
        }
    }

    class Bd {
        private $conexao;
        private $dashboard;

        public function __construct(Conexao $conexao, Dashboard $dashboard) {
            $this->conexao = $conexao->conectar();
            $this->dashboard = $dashboard;
        }
    }

    $dashboard = new Dashboard();
    $conexao = new Conexao();
    $bd = new Bd($conexao, $dashboard);

?>