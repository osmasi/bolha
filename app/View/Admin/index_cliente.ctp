<br>
<br>
<br>
<br>

<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Clientes <small>Clique no nome do cliente para editar</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CNPJ</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Razão Social</th>
                                <th>Contato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($todos_clientes as $cliente): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($cliente['Cliente']['nome'],
                                            array('controller' => 'Admin', 'action' => 'edit_cliente', $cliente['Cliente']['id'])); ?>
                                    </td>
                                    <td> <?php echo $cliente['Cliente']['cnpj']; ?></td>
                                    <td> <?php echo $cliente['Cliente']['email']; ?></td>
                                    <td> <?php echo $cliente['Cliente']['telefone']; ?></td>
                                    <td> <?php echo $cliente['Cliente']['celular']; ?></td>
                                    <td> <?php echo $cliente['Cliente']['razaoSocial']; ?></td>
                                    <td> <?php echo $cliente['Cliente']['contato']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php echo $this->Html->link('Cadastrar Cliente',
                    array('controller' => 'admin', 'action' => 'add_cliente'),
                    array('class' => "btn" )); ?>
            </div>
        </div>
    </div>
</fieldset>
