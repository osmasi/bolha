
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
         
            $dados = $this->request->data; 
            if (!empty($this->request->data['Produto']['imagem']['name'])) {
              $dados['Produto']['imagem'] = $this->Produto->upload($this->data['Produto']['imagem']);
//echo "<br><br><br><br><pre>"; print_r($dados); echo "</pre>";
              if ($this->Produto->save($dados)) {
                $this->Session->setFlash('Produto criado com sucesso!', 'default', array('class' => "alert alert-success"));
                $this->redirect(array('action' => 'index_produto'));
              }else
                  $this->Session->setFlash('Não foi possível cadastrar o Produto. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
            } else {
              $this->Session->setFlash('Não foi possível cadastrar pois nenhuma imagem foi enviada.', 'default', array('class' => "alert alert-danger"));
              $this->redirect(array('action' => 'add_produto'));
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
