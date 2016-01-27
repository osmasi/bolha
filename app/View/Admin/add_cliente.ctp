<?php $this->assign('title', 'Cadastrar cliente'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar Cliente <small>Preencha todos os campos.</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('Cliente'); ?>

                    <?php echo $this->Form->input('nome', array('label' => 'Nome', 'class' => "form-control"));
                        echo $this->Form->input('cnpj', array('label' => 'CNPJ', 'class' => "form-control"));
                        echo $this->Form->input('email', array('label' => 'E-Mail', 'class' => "form-control"));
                        echo $this->Form->input('telefone', array('label' => 'Telefone Fixo', 'class' => "form-control"));
                        echo $this->Form->input('celular', array('label' => 'Celular', 'class' => "form-control"));
                        echo $this->Form->input('razaoSocial', array('label' => 'Razão Social', 'class' => "form-control"));
                        echo $this->Form->input('contato', array('label' => 'Contato', 'class' => "form-control")); ?>

                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Cadastrar', 'class' => "btn btn-block")); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'admin', 'action' => "index_cliente"),
                            array('class' => "btn btn-block" )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
