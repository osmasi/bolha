

<div ng-app="myApp" ng-controller="myCtrl">
<div class="x_title" >
    <h2>LOJA</h2>
</div>
<div ng-app="myApp" ng-controller="myCtrl">

            <div class="container col-sm-9">
            <?php foreach ($todos_produtos as $item) { ?>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="tile-stats">
            <label ng-click="addProduto();
                            id = <?php echo $item['Produto']['id'] ?>;
                            nome = '<?php echo $item['Produto']['nome']; ?>';
                            valor = <?php echo $item['Produto']['valor']; ?>;
                            qtd = <?php echo $item['Produto']['quantidade']; ?>"
                            data-toggle="modal" data-target="#detalhes"><h6><?php echo $item['Produto']['nome']; ?></h6></label>
                          </div>
                        </div>
            <?php } ?>
            </div>

            <div class="container col-sm-3">
                <button type="button" class="button alert large right" data-toggle="modal" data-target="#myModal"><h3 class="fi-shopping-cart" style="color:white"></h3></button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal Conteudo-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Meu Carrinho</h4>
                        </div>
                        <!-- Modal Corpo-->
                        <div class="modal-body">
                            <div class="content">
                                <ul class="pricing-table" id="prodAdicionado">
                                    <li class="title large"><h3 style="color:white">  Produtos      <i class="fi-shopping-cart"></i></h3></li>
                                    <?php foreach ($todos_produtos as $itens) {
                                      $item = "produto".$itens['Produto']['id']; //cria o nome produto + o id com base no banco de dados
                                      $prod = $this->Session->read('produto'.$itens['Produto']['id']); //cria o nome produto + o id com base na session
                                      $addId = $prod['id']; //id para adicionar ao banco
                                      $addQtd = $prod['qtd']; //quantidade para add ao banco
                                      $qtdTotal = $itens['Produto']['quantidade']; //quantidade total para validar o max
                                      //compara se o produto do banco existe na session
                                      if($item == 'produto'.$prod['id']){ ?>
                                        <li class="description">
                                          <div class="form-group">
                                            <?php echo "<h5>".$itens['Produto']['nome']."</h5>"; ?>
                                            <?php echo $this->Form->create('salvarPedido');
                                                echo $this->Form->input('quantidade', array('label' => "Quantidade", 'type' => "number",'class' => "form-control", 'min' => "0", 'max' => "$qtdTotal", 'value' => "$addQtd"));
                                                echo $this->Form->input('id', array('label' => 'id', 'class' => "form-control", 'type' => "hidden", 'value' => "$addId"));
                                                 ?>
                                            </div>
                                        </li>
                                      <?php } }?>

                                </ul>

                                <h5>Total: {{total | currency:"R$"}}</h5>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <div class="col-sm-6"></div>
                                        <?php echo $this->Form->end(array('label' => 'Finalizar', 'class' => "button success large right extend col-sm-6")); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Rodapé-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Fim-->

            <!-- Modal -->
            <div class="modal fade" id="detalhes" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal Conteudo-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h6 class="modal-title">Confira os detalhes deste produto</h6>
                        </div>
                        <!-- Modal Corpo-->
                        <div class="modal-body">

                            <ul class="pricing-table">
                                <li class="title large">
                                    <h4 style="color:white">{{nome}}</h4>
                                </li>
                                <li class="list-group-item">
                                    <input type="hidden" value="{{id}}" id='id_carrinho' />
                                    <h6>Preço {{valor|currency:"R$"}}</h6>
                                    <p font-size="8px">Total disponível em estoque <b>{{qtd - quantidade}}</b> unidades</p>
                                </li>
                            </ul>
                            <div class="row">

                              <div class="form-group  col-md-4">
                                <?php echo $this->Form->create('AddCarrinho');
                                    echo "Adicionar ao Carrinho: ";
                                    echo $this->Form->input('quantidade', array('for' => "qtd", 'class' => "col-sm-6", 'type' => "number", 'max' => "{{qtd}}", 'value' => "0"));
                                    echo $this->Form->input('id', array('label' => 'id', 'class' => "form-control", 'type' => "hidden", 'value' => "{{id}}"));
                                    echo $this->Form->input('nome', array('label' => 'id', 'class' => "form-control", 'type' => "hidden", 'value' => "{{nome}}"));
                                     ?>
                              </div>

                              <div class="form-group col-md-8">
                                  <?php echo $this->Form->end(array('label' => 'Adicionar', 'class' => "col-sm-4 button success large left")); ?>
                            </div>
                        </div>
                        <!-- Modal Rodapé-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Fim-->

        </div>
      </div>
