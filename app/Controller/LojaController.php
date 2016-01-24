
<?php

    class LojaController extends AppController {

        public $name = 'Loja';
        public $uses = array('Categoria', 'Cliente', 'Endereco', 'Pagamento', 'Pedido', 'Produto');

        public function isAuthorized($user = null) {
    		if (parent::isAuthorized($user))
    			return true;

                switch($user['role']){
                    case 'cliente':
                    case 'usuario':
                        switch($this->action) {
                            case 'index':
                                return true;
                                break;
                            default:
                                return false;
                                break;
                        }
                        break;
                }
	    }

        public function index() {
            #$user_login = $this->Auth->user('id');
            $this->set('todos_produtos', $this->Produto->find('all'));
	    }
      public function addCarrinho() {
        echo "<script>alert('teste');</script>";

      }



    }
