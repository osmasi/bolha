<?php $this->assign('title', 'Produtos do Meu Pedido'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pedido</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pedido_produtos as $pedido_produto): ?>
                                <tr>
                                    <td> <?php echo $pedido_produto['Pedido_produto']['id_produto']; ?></td>
                                    <td> <?php echo $pedido_produto['Pedido_produto']['quantidade']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-2">
                    <?php echo $this->Html->link('Voltar',
                        array('controller' => 'users', 'action' => "index_pedidos"),
                        array('class' => "btn btn-block" )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
