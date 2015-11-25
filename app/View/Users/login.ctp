<?php $this->layout = 'autentica'; ?>


<?php
    //echo $this->Session->flash('auth');
    echo $this->Form->create('User');
?>
<div class="animate form heading-about marginbot-50" style='text-align: center;'>
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
        <?php echo $this->Form->input('username',
                array('label' => false, 'class' => "form-control", 'placeholder' => "Usuário")); ?>

        <?php echo $this->Form->input('password',
                array('label' => false, 'class' => "form-control", 'placeholder' => "Senha")); ?>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <br>
    <?php echo $this->Form->end(array('label' => "Log in", 'class' => "btn btn-default")); ?>
</div>
