<?php $this->assign('title', 'Editar Pedido'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar Pedido </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <?php echo $this->Form->create('Pedido'); ?>

                    <?php echo $this->Form->input('usuario', array('label' => 'Usuario', 'class' => "form-control"));
                        echo $this->Form->input('valorTotal', array('label' => 'Valor Total', 'class' => "ckeditor form-control"));
                        echo $this->Form->input('formaPagamento', array('label' => 'Forma de Pagamento', 'class' => "form-control"));
                        echo $this->Form->input('status', array('label' => 'Status', 'class' => "form-control"));
                    ?>

                </div>

                <div class="form-group">
                    <div class="form-group col-md-2">
                        <?php echo $this->Form->end(array('label' => 'Alterar', 'class' => "btn btn-block")); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'admin', 'action' => "index_pedido"),
                            array('class' => "btn btn-block" )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
