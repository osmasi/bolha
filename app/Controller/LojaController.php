
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
            if ($this->request->is('post')) {
                if (!empty($this->data['AddCarrinho']['quantidade'])) {
                  $qtd = $this->data['AddCarrinho']['quantidade'];
                  $id = $this->data['AddCarrinho']['id'];
                  $produto = array('id' => $id, 'qtd' => $qtd);
                  $this->Session->write('produto'.$id,$produto);
                }
                if (!empty($this->data['salvarPedido']['id'])) {
                  $qtd = $this->data['salvarPedido']['quantidade'];
                  $id = $this->data['salvarPedido']['id'];
                }
            }
	    }


    }
