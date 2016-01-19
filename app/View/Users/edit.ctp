<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edição de Usuários <small>Defina as permissões de acesso</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('User', array('action' => 'edit')); ?>

                    <?php
                        echo $this->Form->input('nome',
                            array('label' => 'Nome Completo', 'class' => "form-control"));
                        echo $this->Form->input('username',
                            array('label' => 'Login', 'class' => "form-control"));
                        echo $this->Form->input('role',
                            array('label' => 'Permissão de acesso', 'class' => "form-control",
                                'options' => array(
                                    'desabilitado' => 'DESABILITADO',
                                    'cliente' => 'Cliente',
				                    'usuario' => 'Usuário Padrão',
                                    'admin' => 'Administrador',
			                        ),
                                ));
                              echo $this->Form->input('cnpj', array('label' => 'CNPJ', 'class' => "form-control"));
                               echo $this->Form->input('email', array('label' => 'E-Mail', 'class' => "form-control"));
                               echo $this->Form->input('telefone', array('label' => 'Telefone Fixo', 'class' => "form-control"));
                               echo $this->Form->input('celular', array('label' => 'Celular', 'class' => "form-control"));
                               echo $this->Form->input('razaoSocial', array('label' => 'Razão Social', 'class' => "form-control"));
                               echo $this->Form->input('contato', array('label' => 'Contato', 'class' => "form-control"));


                        echo $this->Form->input('id', array('type' => 'hidden'));
                    ?>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Salvar', 'class' => "btn btn-dark btn-block")); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'users', 'action' => "index"),
                            array('class' => "btn btn-dark btn-block" )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
