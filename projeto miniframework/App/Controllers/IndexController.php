<?php

namespace App\Controllers {

    use MF\Controller\Action;

    class IndexController extends Action {
        protected $view;

        public function index() {
            $this->view->dados = array('Sofá', 'Sofá', 'Sofá');
            $this->render('index');
        }

        public function sobreNos() {
            $this->view->dados = array('Sofá', 'Sofá', 'Sofá');
            $this->render('sobreNos');
        }

    }
}
?>