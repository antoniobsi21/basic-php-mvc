<?php
    namespace App\Controllers;

    use MF\Model\Container;
    use MF\Controller\Action;

    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action {

        public function index() {
            $produto = Container::getModel("Produto");

            $produtos = $produto->getProdutos();

            $this->view->data = $produtos;
            $this->render("index", "layout1");
        }

        public function sobreNos() {

            $info = Container::getModel("Info");

            $infos = $info->getInfo();

            $this->view->data = $infos;
            $this->render("sobre_nos", "layout1");
        }

    }
?>