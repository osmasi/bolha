
<?php

    class AdminController extends AppController {

        public $name = 'Admin';
        public $uses = array('Categoria', 'Cliente', 'Endereco', 'Pagamento', 'Pedido', 'Produto');

        public function index() {

	    }

        public function index_cliente() {
            $this->set('todos_clientes', $this->Cliente->find('all'));
	    }

        public function add_cliente() {
            if ($this->request->is('post')) {
                if ($this->Cliente->save($this->request->data)) {
                    $this->Session->setFlash('Cliente criado com sucesso!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index_cliente'));
                }else{
                    $this->Session->setFlash('Não foi possível cadastrar o cliente. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
	    }

        public function edit_cliente($id = null) {
            $this->Cliente->id = $id;

            if ($this->request->is('get')) {
                $this->request->data = $this->Cliente->read();
            } else {
                if ($this->Cliente->save($this->request->data)) {
                    $this->Session->setFlash('Cliente atualizado!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index_cliente'));
                } else {
                    $this->Session->setFlash('Não foi possível atualizar. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
	    }

    }
