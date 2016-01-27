
<?php
    class LojaController extends AppController {
        public $name = 'Loja';
        public $uses = array('Categoria', 'Cliente', 'Endereco', 'Pagamento', 'Pedido', 'Produto');


        public function beforeFilter() {
          parent::beforeFilter();
          $this->Auth->allow('index');
        }


        public function index() {
            #$user_login = $this->Auth->user('id');
            $this->set('todos_produtos', $this->Produto->find('all'));
            if ($this->request->is('post')) {

                if (!empty($this->data['AddCarrinho']['quantidade'])) {
                  if($_SESSION['produto'.$this->data['AddCarrinho']['id']]){
                    $qtd = $_SESSION['produto'.$this->data['AddCarrinho']['id']]['qtd'];
                  }
                  $qtd += $this->data['AddCarrinho']['quantidade'];
                  $id = $this->data['AddCarrinho']['id'];
                  $produto = array('id' => $id, 'qtd' => $qtd);
                  $this->Session->write('produto'.$id,$produto);
                }
                if (!empty($this->data['Pedido']['status'])) {

                  if ($this->Pedido->save($this->request->data)) {
                    if($this->data['Pedido']['formaPagamento'] == 1){
                      $this->redirect(array('action'=>'boleto'));
                    }else{
                      $this->Session->setFlash('Pedido feito com sucesso!', 'default', array('class' => "alert alert-success"));
                    }

                  }else{
                    $this->Session->setFlash('Não foi possível realizar este pedido. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
                  }
                }
                if (!empty($this->data['deletaSessao'])) {
                  $delSessao = $this->data['deletaSessao']['deleta'];
                  $this->Session->write($delSessao,array('id' => '0', 'qtd' => ''));
                  $this->Session->setFlash('Produto excluido do carrinho!', 'default', array('class' => "alert alert-success"));
                }
            }
          }
            public function boleto(){}
	    }
