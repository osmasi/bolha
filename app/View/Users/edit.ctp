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
                            array('label' => 'Nome do usuário', 'class' => "form-control"));
                        echo $this->Form->input('username',
                            array('label' => 'E-Mail', 'class' => "form-control"));
                        echo $this->Form->input('role',
                            array('label' => 'Permissão de acesso', 'class' => "form-control",
                                'options' => array(
                                    'desabilitado' => 'DESABILITADO',
                                    'cliente' => 'Cliente',
				                    'usuario' => 'Usuário Padrão',
                                    'admin' => 'Administrador',
			                        ),
                                ));


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
