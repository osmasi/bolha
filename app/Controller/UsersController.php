<?php

    class UsersController extends AppController {

        public $name = 'Users';
        public $uses = array('User','Endereco');

        public function isAuthorized($user = null) {
            if (parent::isAuthorized($user))
                return true;

                switch($user['role']){
                    case 'cliente':
                    case 'usuario':
                        switch($this->action) {
                            case 'perfil':
                            case 'pass':
                            case 'help':
                                return true;
                                break;
                            default:
                                return false;
                                break;
                        }
                        break;
                }
        }

        public function beforeFilter() {
    		parent::beforeFilter();
    		#$this->Auth->allow('add', 'logout');
    	}

        public function login() {
    		if ($this->request->is('post')) {
    			if ($this->Auth->login()) {
    				return $this->redirect($this->Auth->redirectUrl());
    			}
                $this->Session->setFlash('Não foi possível acessar o sistema. Usuário ou senha inválido!!!', 'default',
                    array('class' => "alert alert-danger"));
    		}
        }

    	public function logout() {
    		return $this->redirect($this->Auth->logout());
    	}

    	public function index() {
            $this->set('usuarios', $this->User->find('all'));
    	}

        public function add(){
            if ($this->request->is('post')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Usuário criado com sucesso!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash('Não foi possível realizar o cadastro. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        function edit($id = null){
            $this->User->id = $id;

            if ($this->request->is('get')) {
                $this->request->data = $this->User->read();
            } else {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Usuário atualizado!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Não foi possível atualizar. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        public function perfil(){
            $user_login = $this->Auth->user('id');
            $user_full = $this->User->find('all', array(
                                'conditions' => "id = $user_login"));
            $this->set('user_full', $user_full);
        }

        public function help() {

	    }

        function pass($id = null){
            $this->User->id = $id;

            if ($this->request->is('get')) {
                $this->request->data = $this->User->read();
            } else {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Senha alterada!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Não foi possível alterar a senha. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        function delete($id){
            if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
            }
            if ($this->User->delete($id)) {
                $this->Session->setFlash('Usuário id: ' . $id . ' foi removido.', 'default',
                    array('class' => "alert alert-warning"));
                $this->redirect(array('action' => 'index'));
            }
        }




        /*
        ** * ENDEREÇOS
        */
        public function add_endereco(){
          	$this->set('id_usuario', $this->Auth->user('id'));
            if ($this->request->is('post')) {
                if ($this->Endereco->save($this->request->data)) {
                    $this->Session->setFlash('Endereço cadastrado com sucesso!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                }else{
                    $this->Session->setFlash('Não foi possível realizar o cadastro. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        public function index_endereco($id) {
             $this->set('enderecos', $this->Endereco->find('all', array(
                        'conditions' => "id_usuario = $id")));
        }

        function edit_endereco($id = null){
            $this->Endereco->id = $id;

            $this->set('id_usuario', $id);

            if ($this->request->is('get')) {
                $this->request->data = $this->Endereco->read();
            } else {
                if ($this->Endereco->save($this->request->data)) {
                    $this->Session->setFlash('Endereço atualizado!', 'default',
                        array('class' => "alert alert-success"));
                    $this->redirect(array('action' => 'index_endereco'));
                } else {
                    $this->Session->setFlash('Não foi possível atualizar. Por favor, tente novamente.', 'default',
                        array('class' => "alert alert-danger"));
                }
            }
        }

        public function index_perfil(){

        }

    }
