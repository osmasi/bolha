

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
            <?php }
            echo "<pre>";
            $sessao = "produto2";
            print_r($this->Session->read($sessao));
            echo "</pre>"
            ?>
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
                                    <li class="title large"><h3 style="color:white">  {{qtdTotal}}     Produtos      <i class="fi-shopping-cart"></i></h3></li>
                                </ul>

<?php echo "<pre>";
print_r($this->Session->read('Carrinho'));
echo "</pre>";?>

                                <h5>Total: {{total | currency:"R$"}}</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="alert-box alert" ng-show="nFinaliza">{{teste}} <a href="#" class="close" ng-click="nFinaliza = false">&times;</a></div>
                                        <div class="alert-box success right" ng-show="finaliza">{{teste}} <a href="#" class="close" ng-click="finaliza = false">&times;</a></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="button alert large extend">Limpar</button>
                                        <button class="button success large right extend" ng-click="finalizar()">Finalizar</button>
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
                                    echo $this->Form->input('quantidade', array('for' => "qtd", 'class' => "col-sm-6", 'type' => "number", 'max' => "{{qtd}}"));
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
