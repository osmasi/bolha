<?php $this->assign('title', 'Minhas Compras'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Minhas Compras</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Nº Pedido</th>
                                <th>Valor Total</th>
                                <th>Forma de Pagamento</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pedidos as $pedido): ?>
                                <tr>
                                  <td><?php echo $this->Html->link($pedido['Pedido']['id'],
                                          array('controller' => 'users', 'action' => 'view_produtos', $pedido['Pedido']['id'])); ?>
                                  </td>
                                    <td> <?php echo $pedido['Pedido']['valorTotal']; ?></td>
                                    <td> <?php if ($pedido['Pedido']['formaPagamento'] == 1) {
                                      echo "boleto";
                                    } else {
                                      echo "cartão";
                                    }; ?></td>
                                    <td> <?php echo $pedido['Pedido']['status']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-2">
                    <?php echo $this->Html->link('Voltar',
                        array('controller' => 'users', 'action' => "index_perfil"),
                        array('class' => "btn btn-block" )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
