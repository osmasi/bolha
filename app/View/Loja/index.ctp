<?php $this->assign('title', 'Loja'); ?>

<div ng-app="myApp" ng-controller="myCtrl">
    <div class="x_title" >
        <h2>LOJA</h2>
        <div class="container row pull-down" style="size: 300px; font-size:22px; margin-bottom:50px;">
            <a href='/bolha/pages/help' class="gn-icon gn-icon-help">Não encontrou o que queria? Precisa de ajuda? Faça um orçamento clicando aqui!</a>
          </div>
    </div>
    <div ng-app="myApp" ng-controller="myCtrl">

        <div class="container col-sm-11">
            <?php foreach ($todos_produtos as $item) { ?>
            <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="tile-stats team boxed-grey">
                    <label ng-click="addProduto();
                        id = <?php echo $item['Produto']['id'] ?>;
                        nome = '<?php echo $item['Produto']['nome']; ?>';
                        valor = <?php echo $item['Produto']['valor']; ?>;
                        qtd = <?php echo $item['Produto']['quantidade']; ?>;
                        desc = '<?php echo $item['Produto']['descricao']; ?>';
                        img = '<?php echo $item['Produto']['imagem']?>'"
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
                            <img src="/bolha/app/webroot/img/produtos/{{img}}" width="200px" height="200px">
                                <h4 style="color:white">{{nome}}</h4>
                            </div>
                            <div class="list-group-item">
                                <input type="hidden" value="{{id}}" id='id_carrinho' />
                                <h6>Preço {{valor|currency:"R$"}}</h6>
                                <p font-size="8px">Total disponível em estoque <b>{{qtd - quantidade}}</b> unidades</p>
                                <p font-size="8px"><?php echo '{{desc}}' ?></p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group  col-md-4">

                                <?php echo $this->Form->create('AddCarrinho');//, array('id' => 'AddCarrinhoForm', /*'default' => false,*/ 'url' => array('controller' => 'loja', 'action' => 'addCarrinho'))*/);
                                    echo "Adicionar ao Carrinho: ";
                                    echo $this->Form->input('quantidade', array('for' => "qtd", 'class' => "col-sm-6", 'type' => "number", 'max' => "{{qtd}}", 'value' => "0", 'min'=>'0'));
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
                                foreach ($todos_produtos as $itens) {

                                  $item = "produto".$itens['Produto']['id']; //cria o nome produto + o id com base no banco de dados
                                  $prod = $this->Session->read('produto'.$itens['Produto']['id']); //cria o nome produto + o id com base na session

                                  $addId = $prod['id'];
                                    //id para adicionar ao banco

                                  $addQtd = $prod['qtd']; //quantidade para add ao banco
                                  $qtdTotal = $itens['Produto']['quantidade']; //quantidade total para validar o max
                                  $valorItem = $itens['Produto']['valor'];

                                  //compara se o produto do banco existe na session
                                  if($item == 'produto'.$prod['id']){ ?>
                                    <?php $nomeItem = $itens['Produto']['nome']; ?>
                                    <div class="col-sm-3 alert alert-info" align="left" ng-init="apagado = true" ng-show="apagado">

                                      <?php echo $this->Html->image('produtos/'.$itens['Produto']['imagem'], array('width' => '100px', 'height' => '100px')); ?>
                                        <?php echo $this->Form->label($nomeItem.' Quantidade: '.$addQtd);
                                              $totalPedido += $addQtd * $valorItem;
                                        ?>
                                        <button type="button" class="close" data-toggle="modal" data-target="#confirmaExclusao" ng-click="sessao ='<?php echo $item; ?>'">&times;</button>

                                    </div>
                                    <div class="col-sm-1"></div>
                                  <?php } }?>
                                </div>
                            </div>

                            <h5>Total a pagar: R$ <?php echo $totalPedido; ?> </h5>

                            <div class="row">
                                <div class="col-sm-6"></div>
                                <?php if($totalPedido !== 0){?>
                                  <button type="button" class="button success large right extend col-sm-6" data-toggle="modal" data-target="#pagamento" data-dismiss="modal">Finalizar</button>
                                <?php } ?>
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
                                <div class="col-sm-6" align="center" ng-click="forma_pagamento = 1; forma = 'Boleto Bancário'; exibePag = true"><img src="/bolha/app/webroot/img/boleto.png" alt="boleto" height="80px" width="90px"></div>
                                <div class="col-sm-6" align="center" data-toggle="collapse" data-target="#card" ng-click="forma_pagamento = 2; forma='Cartão de Credito'; exibePag = true"><img src="/bolha/app/webroot/img/cartao.png" alt="boleto" height="80px" width="90px" class="col-sm-6"></div>
                            </fieldset>
                        </div>

                        <div class="row">
                            <div>
                                <hr>
                                <h5><?php  echo "Valor Total: R$ ".$totalPedido;  ?></h5>Escolha uma das formas de pagamento listadas acima
                                <p>Forma de pagamento <b>{{forma}}</b></p>
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
                        <div class="row" ng-show='exibePag'>
                            <?php
                                    if(!isset($this->Session->read()['Auth']['User'])){
                                      echo "<pre><h5>Necessário estar logado para finalizar esta compra</h5>
                                      <br><a href='/bolha/users/login'>Clique aqui para logar<a></pre>";
                                    }else{
                                      $usuarioLogado = $this->Session->read()['Auth']['User']['id'];
                                      echo $this->Form->create('Pedido', array('type' => 'file'));
                                      echo $this->Form->input('usuario', array('class' => "form-control", 'type' => "hidden", 'value' => "$usuarioLogado"));
                                      echo $this->Form->input('valorTotal', array('class' => "form-control", 'type' => "hidden", 'value' => "$totalPedido"));
                                      echo $this->Form->input('formaPagamento', array('class' => "form-control", 'type' => "hidden", 'value' => "{{forma_pagamento}}"));
                                      echo $this->Form->input('status', array('class' => "form-control", 'type' => "hidden", 'value' => "finalizado"));
                                      echo $this->Form->end(array('label' => 'Finalizar', 'class' => "button success large right extend col-sm-12"));
                                    }

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


        <!-- Modal -->
        <div class="modal fade" id="confirmaExclusao" role="dialog">
            <div class="modal-dialog">
                <!-- Modal Conteudo-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title">Exclusão</h6>
                    </div>
                    <div class="modal-body">
                      <h4>Você confirma a exclusão deste item?<?php $prodDelete = '{{sessao}}'; ?></h4>
                    </div>
                    <div class="modal-footer">
                      <?php
                           echo $this->Form->create('deletaSessao');
                           echo "<button type='button' class='button success large col-sm-6' data-dismiss='modal'>Cancelar</button>";
                           echo $this->Form->input('deleta', array('class' => "form-control", 'type'=>"hidden", 'value'=> "$prodDelete"));
                           echo $this->Form->end(array('label'=>'Excluir', 'class'=>"button alert large col-sm-6"));
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Fim-->

    </div>
