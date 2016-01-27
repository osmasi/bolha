<fieldset>
    <div class="x_title">
        <h2>Cliente</h2>
        <ul class="nav navbar-right panel_toolbox"> </ul>
        <div class="clearfix"></div>
    </div>

    <hr/>

    <div class="row top_tiles">
        <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-user fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Meu Cadastro",
                            array('controller' => 'users', 'action' => 'perfil')); ?></h3>
                <p>Mostra todas as minhas informações cadastradas.</p>
            </div>
        </div>
      <div class="animated flipInY col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-money fa-5x"></i></div>
                <h3><?php echo $this->Html->link("Minhas Compras",
                            array('controller' => 'users', 'action' => 'index_pedidos',$user_full[0]['User']['id'])); ?></h3>
                <p>Mostra todas as compras efetuadas por você.</p>
            </div>
          </div>
    </div>



<hr/>



</fieldset>
