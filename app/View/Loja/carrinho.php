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
                                      $item = "produto".$itens['Produto']['id'];
                                      $prod = $this->Session->read('produto'.$itens['Produto']['id']);
                                      if($item == 'produto'.$prod['id']){ ?>
                                        <li class="description">
                                            <?php echo "<h6>".$itens['Produto']['nome'].' - quantidade ['.$prod['qtd']."]</h6>"; ?>
                                        </li>
                                      <?php } } ?>

                                </ul>
<?php echo "<pre>"; print_r($_SESSION); echo "</pre>";?>
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