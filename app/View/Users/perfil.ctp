<fieldset>
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?php echo __($user_full[0]['User']['nome']); ?></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <p><small>Login: <?php echo $user_full[0]['User']['username'];?></small></p>
                </div>
                <div class="form-group">
                    <?php echo $this->Html->link('Alterar Senha',
                        array('action' => 'pass', $user_full[0]['User']['id']),
                        array('class' => "btn btn-dark" )
                        ); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
