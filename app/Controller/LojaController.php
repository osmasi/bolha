
<?php

    class LojaController extends AppController {

        public $name = 'Lojas';
        public $uses = array('categoria', 'cliente', 'endereco', 'pagamento', 'pedido', 'produto');

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

	    }

    }
