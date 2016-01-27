<?php $this->assign('title', 'Adicionar Endereço'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastro de Endereço</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('Endereco'); ?>

                    <?php
                        echo $this->Form->input('rua',
                            array('label' => 'Rua', 'class' => "form-control"));
                        echo $this->Form->input('bairro',
                            array('label' => 'Bairro', 'class' => "form-control"));
                        echo $this->Form->input('cep',array('label' => 'CEP', 'class' => "form-control"));
                              echo $this->Form->input('cidade', array('label' => 'Cidade', 'class' => "form-control"));
                               echo $this->Form->input('estado', array('Estado' => 'E-Mail', 'maxlength' => '2', 'class' => "form-control"));
                               echo $this->Form->input('pais', array('label' => 'País', 'class' => "form-control"));
                               echo $this->Form->input('perto', array('label' => 'Perto de', 'class' => "form-control"));
                               echo $this->Form->input('numero', array('label' => 'Número', 'class' => "form-control"));
                               echo $this->Form->input('id_usuario', array('value' => "$id_usuario", 'type' => 'hidden'));
                    ?>


                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Cadastrar', 'class' => "btn btn-dark btn-block")); ?>
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
