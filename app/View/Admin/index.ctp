<br>
<br>
<br>
<br>

<fieldset>
    <div class="x_title">
        <h2>ADMIN</h2>
        <ul class="nav navbar-right panel_toolbox"> </ul>
        <div class="clearfix"></div>
    </div>

    <hr/>

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Clientes",
                            array('controller' => 'admin', 'action' => 'index_cliente')); ?></h3>
                <p>Cadastro de clientes.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-inbox fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Produtos",
                            array('controller' => 'admin', 'action' => 'index_cliente')); ?></h3>
                <p>Cadastro de produtos.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Pedidos",
                            array('controller' => 'admin', 'action' => 'index_cliente')); ?></h3>
                <p>Pedidos à faturrar.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-money fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Financeiro",
                            array('controller' => 'admin', 'action' => 'index_cliente')); ?></h3>
                <p>Contas a pagar e receber.</p>
            </div>
        </div>
    </div>



<hr/>



</fieldset>
