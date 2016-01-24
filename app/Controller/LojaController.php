
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
                  $this->Session->write('produto'.$id,$qtd);
                }
            }
	    }
<<<<<<< HEAD
=======


        public function addCarrinho($id, $qtd) {
            $this->Session->write('Carrinho.id', !isset($id) ? 'fodeo' : $id);
            $this->Session->write('Carrinho.qtd', !isset($qtd) ? 'fodeo' : $qtd);

     
            echo "<script>alert('teste');</script>";


            $this->Session->write('Carrinho.id', 'BANANA');
            $_SESSION['Carrinho']['id'] = 'buceta';
            $_SESSION['Carrinho']['buceta'] = 'aff';
        }
>>>>>>> origin/master



    }
