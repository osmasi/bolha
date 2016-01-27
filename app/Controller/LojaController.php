
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
                  $qtd = $this->data['AddCarrinho']['quantidade'];
                  $id = $this->data['AddCarrinho']['id'];
                  $produto = array('id' => $id, 'qtd' => $qtd);
                  $this->Session->write('produto'.$id,$produto);
                }
                if (!empty($this->data['salvarPedido']['id'])) {
                  if ($this->Pedido->save($dados['salvarPedido'])) {                                                       //a funcao upload salva o arquivo e retorna o nome
                    $this->Session->setFlash('Pedido finalizado com sucesso!', 'default', array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                  } else
                      $this->Session->setFlash('Não foi possível finalizar este Pedido. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
                }
            }
	    }

        public function addCarrinho() {
            $content = '<div> DEU CERTO </div>';


            if ($this->request->is('post')) {

                $content .= "id: ".$this->data['AddCarrinho']['id']." e qtd: ".$this->data['AddCarrinho']['quantidade'];


                $this->Session->write('AAAAAAAAAAAAAAAAAAA', "tste");
            }

            $this->set(compact('content'));
            $this->render('ajax_response', 'ajax');
        }


    }
