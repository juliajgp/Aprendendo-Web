<?php

namespace App\Controllers {

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class IndexController extends Action {
        protected $view;

        public function index() {
            //$this->view->dados = array('Sofá', 'Sofá', 'Sofá');

            //instancia de conexão
            $conn = Connection::getDb();

            //instanciar modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos() {
            $this->view->dados = array('Sofá', 'Sofá', 'Sofá');
            $this->render('sobreNos', 'layout1');
        }

    }
}
?>