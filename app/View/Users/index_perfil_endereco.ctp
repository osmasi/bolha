<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastro de Endereços </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                            <tr>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>CEP</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>País</th>
                                <th>Perto de</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($enderecos as $endereco): ?>
                                <tr>
                                    <td> <?php echo $endereco['Endereco']['rua']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['numero']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['bairro']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['cep']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['cidade']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['estado']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['pais']; ?></td>
                                    <td> <?php echo $endereco['Endereco']['perto']; ?></td>
                                    <td>
                                        <?php echo $this->Form->postLink('Excluir',
                                        				array('action' => 'delete_endereco', $endereco['Endereco']['id']),
                                        				array('confirm' => 'Tem Certeza?'));
                                              echo " | ";
                                              $endereco = array('action' => 'edit_perfil_endereco', $endereco['Endereco']['id']);
                                        			echo $this->Html->link('Editar Endereço', $endereco);
                                        ?>
                                  </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-2">
                  <?php echo $this->Html->link('Cadastrar Endereço',
                      array('controller' => 'users', 'action' => 'add_perfil_endereco'),
                      array('class' => "btn btn-dark" )); ?>
                </div>
                <div class="form-group col-md-2">
                    <?php echo $this->Html->link('Voltar',
                        array('controller' => 'users', 'action' => "perfil"),
                        array('class' => "btn btn-block" )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
