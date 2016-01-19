<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastro de Usuários <small>Clique no nome do usuário para editar</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Role</th>
                                <th>CNPJ</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Razão Social</th>
                                <th>Contato</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $user): ?>
                                <tr>
                                    <td><?php echo $this->Html->link($user['User']['nome'],
                                            array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?>
                                    </td>
                                    <td> <?php echo $user['User']['username']; ?></td>
                                    <td> <?php echo $user['User']['role']; ?></td>
                                    <td> <?php echo $user['User']['cnpj']; ?></td>
                                    <td> <?php echo $user['User']['email']; ?></td>
                                    <td> <?php echo $user['User']['telefone']; ?></td>
                                    <td> <?php echo $user['User']['celular']; ?></td>
                                    <td> <?php echo $user['User']['razaoSocial']; ?></td>
                                    <td> <?php echo $user['User']['contato']; ?></td>
                                    <td><?php //echo $this->Html->link('<i class="fa fa-pencil-square-o"></i>',
                                            //array('action' => 'edit', $user['User']['id']),
                                            //array('escape' => false));?>
                                        <?php echo $this->Html->link('<i class="fa fa-key"></i>',
                                                array('action' => 'pass', $user['User']['id']),
                                                array('escape' => false));
                                                ?> | <?php
                                                echo $this->Form->postLink('Excluir',
                                        					array('action' => 'delete', $user['User']['id']),
                                        					array('confirm' => 'Tem Certeza?'))?>
                                        <?php //echo $this->Form->postLink('<i class="fa fa-trash-o"></i> ',
                                            //array('action' => 'delete', $user['User']['id']),
                                            //array('escape' => false, 'confirm' => 'Excluir o Usuário?') )?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-2">
                  <?php echo $this->Html->link('Cadastrar Usuário',
                      array('controller' => 'users', 'action' => 'add'),
                      array('class' => "btn btn-dark" )); ?>
                </div>
                <div class="form-group col-md-2">
                    <?php echo $this->Html->link('Voltar',
                        array('controller' => 'admin', 'action' => "index"),
                        array('class' => "btn btn-block" )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
