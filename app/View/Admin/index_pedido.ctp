<?php $this->assign('title', 'Pedidos'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pedidos <small>Clique no número do pedido para editar</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Usuário</th>
                                <th>Valor Total</th>
                                <th>Forma de Pagamento</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pedidos as $pedido): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($pedido['Pedido']['id'],
                                            array('controller' => 'Admin', 'action' => 'edit_pedido', $pedido['Pedido']['id'])); ?>
                                    </td>
                                    <td> <?php echo $pedido['Pedido']['usuario']; ?></td>
                                    <td> <?php echo $pedido['Pedido']['valorTotal']; ?></td>
                                    <td> <?php echo $pedido['Pedido']['formaPagamento']; ?></td>
                                    <td> <?php echo $pedido['Pedido']['status']; ?></td>
                                    <td><?php echo $this->Form->postLink('Excluir',
                            					array('action' => 'delete_pedido', $pedido['Pedido']['id']),
                            					array('confirm' => 'Tem Certeza?'))?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php echo $this->Html->link('Voltar',
                    array('controller' => 'admin', 'action' => 'index'),
                    array('class' => "btn" )); ?>

            </div>
        </div>
    </div>
</fieldset>
