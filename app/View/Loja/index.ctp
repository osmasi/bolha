<?php
if(!isset($this->Session->read()['Auth']['User'])){
  echo "<script>window.location('http://localhost/bolha/users/login')</script>";
}else{
  $usuarioLogado = $this->Session->read()['Auth']['User']['id'];
}
?>
<div>
    <h1>testando a banana:</h1>
    <div id='testandobanana'></div>
</div>
<?php
//  TENTANDO O AJAX
    $data = $this->Js->get('#AddCarrinhoForm')->serializeForm(array('isForm' => true, 'inline' => true));
    $this->Js->get('#AddCarrinhoForm')->event(
   'submit',
    $this->Js->request(
    array('controller' => 'loja', 'action' => 'addCarrinho'),
    array(
        'update' => '#testandobanana',
        'data' => $data,
        'async' => true,
        'dataExpression'=>true,
        'method' => 'POST',
        'before' => "$('#modalContainer').load('carrinho.php')",
    )
  )
);
 echo $this->Js->writeBuffer();
?>


<div ng-app="myApp" ng-controller="myCtrl">
    <div class="x_title" >
        <h2>LOJA</h2>
    </div>
    <div ng-app="myApp" ng-controller="myCtrl">

        <!--
        <div class="container">
                  <div class="row">
              <?php $i = 0;
              foreach ($produtosHome as $item) { ?>
                      <div class="col-xs-6 col-sm-3 col-md-3">
                          <div class="team boxed-grey">
                              <div class="inner">
                      <h5><?php echo $item['Produto']['nome'] ?></h5>
                                  <p class="subtitle"><?php echo "R$ " . $item['Produto']['valor'] ?></p>
                                  <div class="avatar"><?php echo $this->Html->image('produtos/'.$item['Produto']['imagem'], array('width' => '200px', 'height' => '200px')); ?> </div>
                              </div>
                          </div>
                      </div>
              <?php $i++; if ($i >= 4) break; } ?>
                  </div>
            </div>
        -->

        <div class="container col-sm-11">
            <?php foreach ($todos_produtos as $item) { ?>
            <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="tile-stats team boxed-grey">
                    <label ng-click="addProduto();
                                id = <?php echo $item['Produto']['id'] ?>;
                                            nome = '<?php echo $item['Produto']['nome']; ?>';
                                                        valor = <?php echo $item['Produto']['valor']; ?>;
                                                                    qtd = <?php echo $item['Produto']['quantidade']; ?>;
                                                                                desc = '<?php echo $item['Produto']['descricao']; ?>'"
                           data-toggle="modal" data-target="#detalhes">
                        <div class="inner" >
                            <h6><?php echo $item['Produto']['nome']; ?></h6>
                    <?php echo $this->Html->image('produtos/'.$item['Produto']['imagem'], array('width' => '100px', 'height' => '100px')); ?>
                        </div>
                    </label>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="container col-sm-1" align="right">
            <button type="button" class="button alert large right" data-toggle="modal" data-target="#myModal"><h3 class="fi-shopping-cart" style="color:white"></h3>Carrinho</button>
        </div>


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
                        <div class="pricing-table">
                            <div class="title large">
                            <?php echo $this->Html->image('produtos/'.$item['Produto']['imagem'], array('width' => '200px', 'height' => '200px')); ?>
                                <h4 style="color:white">{{nome}}</h4>
                            </div>
                            <div class="list-group-item">
                                <input type="hidden" value="{{id}}" id='id_carrinho' />
                                <h6>Preço {{valor|currency:"R$"}}</h6>
                                <p font-size="8px">Total disponível em estoque <b>{{qtd - quantidade}}</b> unidades</p>
                                <p font-size="8px">{{desc}}</p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group  col-md-4">
                                <?php echo $this->Form->create('AddCarrinho');//, array('id' => 'AddCarrinhoForm', /*'default' => false,*/ 'url' => array('controller' => 'loja', 'action' => 'addCarrinho'))*/);
                                    echo "Adicionar ao Carrinho: ";
                                    echo $this->Form->input('quantidade', array('for' => "qtd", 'class' => "col-sm-6", 'type' => "number", 'max' => "{{qtd}}", 'value' => "0"));
                                    echo $this->Form->input('id', array('label' => 'id', 'class' => "form-control", 'type' => "hidden", 'value' => "{{id}}"));
                                    echo $this->Form->input('nome', array('label' => 'id', 'class' => "form-control", 'type' => "hidden", 'value' => "{{nome}}"));
                                     ?>
                            </div>

                            <div class="form-group col-md-8">
                                  <?php echo $this->Form->submit('Adicionar', array('class' => "col-sm-4 button success large left"));
                                        echo $this->Form->end(); ?>
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



        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal Conteudo-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Meu Carrinho</h4>
                    </div>
                    <!-- Modal Corpo-->
                    <div class="modal-body">
                        <div class="content">
                            <div class="panel panel-default" id="prodAdicionado">
                                <div class="panel-header"><h3 style="background-color:black; color:white" align="center">  Produtos      <i class="fi-shopping-cart"></i></h3></div>
                                <div class="panel-body row">
                                <?php
                                $totalPedido = 0;
                                $arrPedidoProduto = array();
                                $arrayCarrinho = array();
                                foreach ($todos_produtos as $itens) {
                                  $item = "produto".$itens['Produto']['id']; //cria o nome produto + o id com base no banco de dados
                                  $prod = $this->Session->read('produto'.$itens['Produto']['id']); //cria o nome produto + o id com base na session
                                  $addId = $prod['id']; //id para adicionar ao banco
                                  $addQtd = $prod['qtd']; //quantidade para add ao banco
                                  $qtdTotal = $itens['Produto']['quantidade']; //quantidade total para validar o max
                                  $valorItem = $itens['Produto']['valor'];

                                  //compara se o produto do banco existe na session
                                  if($item == 'produto'.$prod['id']){ ?>
                                    <?php $nomeItem = $itens['Produto']['nome']; ?>
                                    <div class="col-sm-3 boxed-grey" align="left">
                                        <? echo $this->Form->input('quantidade', array('label' => "$nomeItem", 'type' => "number",'class' => "form-control", 'min' => "0", 'max' => "$qtdTotal", 'value' => "$addQtd")); ?>
                                        <?php
                                            array_push($arrayCarrinho, array('id' => $addId, 'valor' => $valorItem, 'quantidade' => $addQtd));
                                            foreach ($arrayCarrinho as $prod) {
                                              array_push($arrPedidoProduto, array('id_produto'=>$prod['id'], 'quantidade'=>$prod['quantidade']));
                                              $totalPedido += $prod['quantidade'] * $prod['valor'];
                                            }
                                        ?>
                                        <!--<button type="button" class="close" ng-click="sessao = <? echo 'produto'.$prod['id']; ?>" data-toggle="modal" data-target="#confirmaExclusao">&times;</button>-->
                                    </div>
                                    <div class="col-sm-1"></div>
                                  <?php } }?>
                                </div>
                            </div>

                            <h5>Total: {{total| currency:"R$"}}</h5>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <button type="button" class="button success large right extend col-sm-6" data-toggle="modal" data-target="#pagamento" data-dismiss="modal">Finalizar</button>
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
        <div class="modal fade" id="pagamento" role="dialog">
            <div class="modal-dialog">
                <!-- Modal Conteudo-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title">Formas de pagamento</h6>
                    </div>
                    <!-- Modal Corpo-->
                    <div class="modal-body">
                        <div class="row">
                            <fieldset>
                                <div class="col-sm-6" align="center" ng-click="forma_pagamento = 1"><img src="/bolha/app/webroot/img/boleto.png" alt="boleto" height="80px" width="90px"></div>
                                <div class="col-sm-6" align="center" data-toggle="collapse" data-target="#card" ng-click="forma_pagamento = 2"><img src="/bolha/app/webroot/img/cartao.png" alt="boleto" height="80px" width="90px" class="col-sm-6"></div>
                            </fieldset>
                        </div>
                              <?php  echo "Valor Total: R$ ".$totalPedido;  ?>
                        <div class="row">
                            <div>
                                <hr>
                                Escolha uma das formas de pagamento listadas acima
                                <hr>
                            </div>
                        </div>
                        <div id="card" class="collapse">
                            <div class="row">
                                <pre>Preencha os dados do cartão...</pre>
                                <div class="col-sm-12">
                                    <div class="col-sm-8">Número do cartão:<input type="number" min="0" max="9999999999999999" class="form-control"></div>
                                    <div class="col-sm-4"> Cod. Segurança:<input type="number" min="0" max="999" class="form-control"></div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-6">Validade:<input type="text" id="datepicker" class="form-control"></div>
                                    <div class="col-sm-6">
                                        Selecione a Bandeira:
                                        <select class="form-control">
                                            <option>Bandeira</option>
                                            <option>Visa</option>
                                            <option>Mastercard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <?php
                                    echo $this->Form->create('salvarPedido');
                                    echo $this->Form->input('cliente', array('class' => "form-control", 'type' => "hidden", 'value' => "$usuarioLogado"));
                                    echo $this->Form->input('valorTotal', array('class' => "form-control", 'type' => "hidden", 'value' => "$totalPedido"));
                                    echo $this->Form->input('formaPagamento', array('class' => "form-control", 'type' => "hidden", 'value' => "{{forma_pagamento}}"));
                                    echo $this->Form->input('status', array('class' => "form-control", 'type' => "hidden", 'value' => "finalizado"));
                                    echo $this->Form->end(array('label' => 'Finalizar', 'class' => "button success large right extend col-sm-12"));
                                ?>
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
