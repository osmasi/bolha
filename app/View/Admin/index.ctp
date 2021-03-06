<?php $this->assign('title', 'Painel de Administração'); ?>

<fieldset>
    <div class="x_title">
        <h2>ADMIN</h2>
        <ul class="nav navbar-right panel_toolbox"> </ul>
        <div class="clearfix"></div>
    </div>

    <hr/>

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-user fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Usuários",
                            array('controller' => 'users', 'action' => 'index')); ?></h3>
                <p>Cadastro de usuários.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-inbox fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Produtos",
                            array('controller' => 'admin', 'action' => 'index_produto')); ?></h3>
                <p>Cadastro de produtos.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Pedidos",
                            array('controller' => 'admin', 'action' => 'index_pedido')); ?></h3>
                <p>Pedidos à faturar.</p>
            </div>
        </div>
    </div>



<hr/>



</fieldset>
