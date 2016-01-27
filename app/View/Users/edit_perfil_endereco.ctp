<?php $this->assign('title', 'Editar Meu Endereço'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edição de Endereços</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('Endereco'); ?>

                    <?php
                        echo $this->Form->input('rua', array('label' => 'Rua', 'class' => "form-control"));
                        echo $this->Form->input('numero', array('label' => 'Número', 'class' => "form-control"));
                        echo $this->Form->input('bairro', array('label' => 'Bairro', 'class' => "form-control"));
                        echo $this->Form->input('cep', array('label' => 'CEP', 'class' => "form-control"));
                        echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => "form-control"));
                        echo $this->Form->input('estado', array('label' => 'Estado', 'class' => "form-control"));
                        echo $this->Form->input('pais', array('label' => 'País', 'class' => "form-control"));
                        echo $this->Form->input('perto', array('label' => 'Perto de', 'class' => "form-control"));
                        echo $this->Form->input('id_usuario', array('value' => "$id_usuario", 'type' => 'hidden'));
                        echo $this->Form->input('id', array('type' => 'hidden'));
                    ?>
                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Salvar', 'class' => "btn btn-dark btn-block")); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'users', 'action' => "index_perfil_endereco/$id_usuario"),
                            array('class' => "btn btn-dark btn-block" )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
