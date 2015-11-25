<?php
    App::uses('AppModel', 'Model');
    App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {
        public $name = 'Usuario';

        public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
    			$hash = new BlowfishPasswordHasher();
    			$senha = $hash->hash($this->data[$this->alias]['password']);

    			$this->data[$this->alias]['password'] = $senha;
    		}
    		return true;
        }

        public $validate = array(
            'nome' => array(
                'required' => array(
                    'rule'    => array('minLength', 3),
                    'message' => 'É necessário digitar seu nome completo'
                ),
            ),
            'email' => array(
                'required' => array(
                    'rule'    => 'email',
                    'message' => 'E-mail inválido',
                ),
            ),
            'password' => array(
                'required' => array(
                    'rule'    => 'notBlank',
                    'message' => 'É necessária escolher uma senha',
                ),
                'length' => array(
		            'rule'    => array('minLength', 4),
		            'message' => 'É necessário possuir ao menos 4 caracteres'
		        ),
            ),
        );
    }
