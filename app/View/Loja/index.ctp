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
                            data-toggle="modal" data-target="#detalhes"><?php echo $item['Produto']['nome']; ?></label>
                          </div>
                        </div>
            <?php } ?>
            </div>
            
            <div class="container col-sm-3">
                <button type="button" class="button alert tiny right" data-toggle="modal" data-target="#myModal"><i class="fi-shopping-cart" style="color:white; font-size: 35px"></i></button>
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
                                    <li class="title large"><h3 style="color:black">  {{qtdTotal}}     Produtos      <i class="fi-shopping-cart"></i></h3></li>
                                </ul>
                                <h5>Total: {{total | currency:"R$"}}</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="alert-box info" ng-show="total < 2000">O total geral inclui o valor de R$100,00 de frete.</div>
                                        <div class="alert-box alert" ng-show="nFinaliza">{{teste}} <a href="#" class="close" ng-click="nFinaliza = false">&times;</a></div>
                                        <div class="alert-box success" ng-show="finaliza">{{teste}} <a href="#" class="close" ng-click="finaliza = false">&times;</a></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="button alert extend" ng-click="count1 = 0;
                                                    count2 = 0;
                                                    count3 = 0;
                                                    count4 = 0;
                                                    nFinaliza = false;
                                                    finaliza = false">Limpar</button>
                                        <button class="button success extend" ng-click="finalizar()">Finalizar</button>
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
                                    <h6>Preço {{valor|currency:"R$"}}</h6>
                                    Total disponível em estoque {{qtd - quantidade}} unidades
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-4">Adicione ao carrinho:</div>
                                <div class="col-sm-4"><input type='number' min="0" max="{{qtd}}" ng-model='quantidade'></div>
                                <div class="col-sm-4"><button type='button' class="button success tiny left" ng-click="adicionar()" data-dismiss="modal">Adicionar</button></div>
                            </div>
                            <label for="prod" ng-show="quantidade > 0">Total a pagar: {{totalProduto = valor * quantidade|currency:"R$"}}</label>

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



