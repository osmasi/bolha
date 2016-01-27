<?php $this->assign('title', 'Produtos'); ?>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Produtos <small>Clique no número do produto para editar</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Imagem</th>
                                <th>Tamanho</th>
                                <th>Comprimento</th>
                                <th>Categoria</th>
                                <th>Valor</th>
                                <th>Quantidade</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produtos as $produto): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($produto['Produto']['id'],
                                            array('controller' => 'Admin', 'action' => 'edit_produto', $produto['Produto']['id'])); ?>
                                    </td>
                                    <td> <?php echo $produto['Produto']['nome']; ?></td>
                                    <td> <?php echo $produto['Produto']['descricao']; ?></td>
                                    <td> <?php echo $produto['Produto']['imagem']; ?></td>
                                    <td> <?php echo $produto['Produto']['tamanho']; ?></td>
                                    <td> <?php echo $produto['Produto']['comprimento']; ?></td>
                                    <td> <?php echo $produto['Produto']['categoria']; ?></td>
                                    <td> <?php echo $produto['Produto']['valor']; ?></td>
                                    <td> <?php echo $produto['Produto']['quantidade']; ?></td>
                                    <td><?php echo $this->Form->postLink('Excluir',
                            					array('action' => 'delete_produto', $produto['Produto']['id']),
                            					array('confirm' => 'Tem Certeza?'))?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php echo $this->Html->link('Cadastrar Produto',
                    array('controller' => 'admin', 'action' => 'add_produto'),
                    array('class' => "btn" )); ?>

                <?php echo $this->Html->link('Voltar',
                    array('controller' => 'admin', 'action' => 'index'),
                    array('class' => "btn" )); ?>

            </div>
        </div>
    </div>
</fieldset>
