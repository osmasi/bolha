
<?php

    class AdminController extends AppController {

        public $name = 'Admin';
        public $uses = array('Categoria', 'Endereco', 'Pagamento', 'Pedido', 'Produto');

        public function index() {

	    }

      public function index_produto() {
            $this->set('produtos', $this->Produto->find('all'));
      }

      public function add_produto() {
          if ($this->request->is('post')) {
              if (!empty($this->data['Produto']['imagem']['name'])) {
                $this->data['Produto']
              }
              if ($this->Produto->save($this->request->data)) {
                  $this->Session->setFlash('Produto criado com sucesso!', 'default',
                      array('class' => "alert alert-success"));
                  $this->redirect(array('action' => 'index_produto'));
              }else{
                  $this->Session->setFlash('Não foi possível cadastrar o Produto. Por favor, tente novamente.', 'default',
                      array('class' => "alert alert-danger"));
              }
          }
      }
      public function edit_produto($id = null) {
          $this->Produto->id = $id;

          if ($this->request->is('get')) {
              $this->request->data = $this->Produto->read();
          } else {
              if ($this->Produto->save($this->request->data)) {
                  $this->Session->setFlash('Produto atualizado!', 'default',
                      array('class' => "alert alert-success"));
                  $this->redirect(array('action' => 'index_produto'));
              } else {
                  $this->Session->setFlash('Não foi possível atualizar. Por favor, tente novamente.', 'default',
                      array('class' => "alert alert-danger"));
              }
          }
      }

      public function delete_produto($id) {

  			if (!$this->request->is('post')) {
  				throw new MethodNotAllowedException();
  			}

  			if ($this->Produto->delete($id)) {

  				$this->Session->setFlash('O Produto foi excluído com sucesso!');
  				$this->redirect(array('action' => 'index_produto'));

  			}

  		}

    }
