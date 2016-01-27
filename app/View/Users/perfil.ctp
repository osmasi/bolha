<?php $this->assign('title', 'Perfil Pessoal'); ?>
<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
              <h1>Informações do seu Cadastro</h1>
                <h2><?php echo __($user_full[0]['User']['nome']); ?></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <p><h5>CNPJ: <?php echo $user_full[0]['User']['cnpj'];?></h5></p>
                    <p><h5>E-MAIL: <?php echo $user_full[0]['User']['email'];?></h5></p>
                    <p><h5>TELEFONE: <?php echo $user_full[0]['User']['telefone'];?></h5></p>
                    <p><h5>CELULAR: <?php echo $user_full[0]['User']['celular'];?></h5></p>
                    <p><h5>RAZÃO SOCIAL: <?php echo $user_full[0]['User']['razaoSocial'];?></h5></p>
                    <p><h5>CONTATO: <?php echo $user_full[0]['User']['contato'];?></h5></p>
                    <p><h5>LOGIN: <?php echo $user_full[0]['User']['username'];?></h5></p>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-2">
                      <?php echo $this->Html->link('Visualizar Endereço',
                          array('action' => 'index_perfil_endereco', $user_full[0]['User']['id']),
                          array('class' => "btn btn-dark btn-block" )
                          ); ?>
                    </div>
                <div class="form-group">
                    <div class="form-group col-md-2">
                      <?php echo $this->Html->link('Alterar Senha',
                          array('action' => 'pass', $user_full[0]['User']['id']),
                          array('class' => "btn btn-dark btn-block" )
                          ); ?>
                    </div>
                    <div class="form-group col-md-2">
                      <?php echo $this->Html->link('Alterar Cadastro',
                          array('action' => 'edit_perfil', $user_full[0]['User']['id']),
                          array('class' => "btn btn-dark btn-block" )
                          ); ?>
                    </div>
                    <div class="form-group col-md-2">
                        <?php echo $this->Html->link('Voltar',
                            array('controller' => 'users', 'action' => "index_perfil"),
                            array('class' => "btn btn-dark btn-block" )); ?>
                    </div>
                </div>
            </div>
      </div>
</fieldset>
