<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar Produto </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('Produto'); ?>

                    <?php echo $this->Form->input('nome', array('label' => 'Descrição', 'class' => "form-control"));
                        echo $this->Form->input('descricao', array('label' => 'Descrição', 'class' => "form-control"));
                        echo $this->Form->input('tamanho', array('label' => 'Tamanho', 'class' => "form-control"));
                        echo $this->Form->input('comprimento', array('label' => 'Comprimento', 'class' => "form-control"));
                        ?><br><?php
                        echo $this->Form->input('categoria', array('label' => 'Categoria',
                      													'options' => array('1' => 'Plástico','2' => 'Papelão')));
                        ?><br><?php
                        echo $this->Form->input('valor', array('label' => 'Valor em Reais', 'class' => "form-control"));
                        echo $this->Form->input('quantidade', array('label' => 'Quantidade', 'class' => "form-control"));?>

                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Alterar', 'class' => "btn btn-block")); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'admin', 'action' => "index_produto"),
                            array('class' => "btn btn-block" )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
