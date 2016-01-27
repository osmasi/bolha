
<?php

    class AdminController extends AppController {

        public $name = 'Admin';
        public $uses = array('Categoria', 'Endereco', 'Pagamento', 'Pedido', 'Produto');

        
        public function isAuthorized($user = null) {
        if (parent::isAuthorized($user))
          return true;

            switch($user['role']){
                case 'admin':
                    switch($this->action) {
                        case 'index':
                        case 'add_cliente':
                        case 'add_produto':
                        case 'edit_cliente':
                        case 'edit_produto':
                        case 'index_cliente':
                        case 'index_produto':
                            return true;
                            break;
                        default:
                        $this->Session->setFlash('Não autorizado!', 'default', array('class' => "alert alert-danger"));
                        $this->redirect(array('action' => 'index'));
                            return false;
                            break;
                    }
                    break;
            }
        }

        public function index() {

	    }

      public function index_produto() {
            $this->set('produtos', $this->Produto->find('all'));
      }

      public function add_produto() {
          if ($this->request->is('post')) {  
         
            $dados = $this->request->data;          //salva o request->data numa variavel q pode ser editada
            if (!empty($this->request->data['Produto']['imagem']['name'])) {    //se foi enviada img, faz o cadastro
              $dados['Produto']['imagem'] = $this->Produto->upload($this->data['Produto']['imagem']);   //array imagem vira string com o nome da img
              if ($this->Produto->save($dados)) {                                                       //a funcao upload salva o arquivo e retorna o nome
                $this->Session->setFlash('Produto criado com sucesso!', 'default', array('class' => "alert alert-success"));
                $this->redirect(array('action' => 'index_produto'));
              } else
                  $this->Session->setFlash('Não foi possível cadastrar o Produto. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
            } else {              //se nao foi enviada img, n tem como cadastrar (todo produto tem q ter img)
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
            $dados = $this->request->data;           //salva o request->data numa variavel q pode ser editada
            if (!empty($this->request->data['Produto']['imagem']['name'])) {    //se foi enviada uma nova img, faz o cadastro normal
              $dados['Produto']['imagem'] = $this->Produto->upload($this->data['Produto']['imagem']);   //array imagem vira string com o nome da img
              if ($this->Produto->save($dados)) {                                                       //a funcao upload salva o arquivo e retorna o nome
                $this->Session->setFlash('Produto atualizado com sucesso!', 'default', array('class' => "alert alert-success"));
                $this->redirect(array('action' => 'index_produto'));
              } else
                  $this->Session->setFlash('Não foi possível atualizar o Produto. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
            } else {        //se n foi enviada img, quer dizer q eh pra manter a q ja esta sendo usada
                        //o jeito q axei pra fazer isso foi especificar quais campos deveriam ser salvos - todos menos o de img
              if ($this->Produto->save($dados, array(
                  'fieldList' => array('id', 'descricao', 'tamanho', 'comprimento', 'categoria', 'valor', 'quantidade')))) 
              {
                $this->Session->setFlash('Produto atualizado com sucesso!', 'default', array('class' => "alert alert-success"));
                $this->redirect(array('action' => 'index_produto'));
              } else
                  $this->Session->setFlash('Não foi possível atualizar o Produto. Por favor, tente novamente.', 'default', array('class' => "alert alert-danger"));
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

       public function index_pedido($id) {
             $this->set('pedidos', $this->Pedido->find('all'));
        }

        public function edit_pedido($id = null) {
            $this->Pedido->id = $id;

            $this->set('id_usuario', $id);

            if ($this->request->is('get')) {
                $this->request->data = $this->Pedido->read();
            } else {
                if ($this->Pedido->save($this->request->data)) {
                    $this->Session->setFlash('Pedido atualizado!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index_pedido'));
                } else {
                    $this->Session->setFlash('Não foi possível atualizar. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        public function delete_pedido($id) {

        if (!$this->request->is('post')) {
          throw new MethodNotAllowedException();
        }

        if ($this->Pedido->delete($id)) {

          $this->Session->setFlash('O Pedido foi excluído com sucesso!', 'default', array('class' => 'alert alert-success'));
          $this->redirect(array('action' => 'index_pedido'));

        }

      }
    }
