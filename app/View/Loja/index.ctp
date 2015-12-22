
<script type="text/javascript">
function banana2 () {document.getElementById("banana").innerHTML="tete";}
function banana () {alert("bunda");}
</script>
<p id='banana'> BABANANANANANANANANANAJGSSVDJTSG</p> <button onclick="banana2()"> </button>
<div class="x_title">
    <h2>LOJA</h2>
</div>

<div class="produtos">
    <div class="row top_tiles">
      <div class="row top_tiles">
           <?php	foreach ($todos_produtos as $item) { ?>
              <div class="animated flipInY col-lg-2 col-md-2 col-sm-2 col-xs-2">
                  <div class="tile-stats">
                      <h3><?php echo $item['Produto']['nome']; ?></h3>
                      <p>R$<?php echo $item['Produto']['valor']; ?></p>
                      <img src="pegarImg.php?id= <?php echo $item['Produto']['id'] ?>"/>
                  </div>
              </div>
            <?php	}	?>
      </div>
    </div>
</div>

       <div class="carrinho">
           <button type="button" class="button alert tiny right" data-toggle="modal" data-target="#myModal"><h3 style="color:white"><i class="gn-icon gn-icon-download"></i></h3></button>

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
                           <div ng-app="myApp" ng-controller="myCtrl" class="content">
                               <ul class="pricing-table">
                                   <li class="title large"><h3 style="color:white">{{count1 + count2 + count3 + count4}}       Produtos      <i class="fi-shopping-cart"></i></h3></li>

                                   <li class="list-group-item">
                                       <h5 style="color:grey">
                                           <div class="row">
                                               <div class="col-sm-9">
                                                   <img src="bobina4.jpg" alt="Papelao Kraft Puro" class="th radius" width="40" height="40">
                                                   Papelão Kraft Puro
                                               </div>
                                               <div class="col-sm-3">
                                                   <input type="number" min="0" ng-model="count1">
                                               </div>
                                           </div>
                                       </h5>
                                   </li>


                                   <li class="list-group-item">
                                       <h5 style="color:grey">
                                           <div class="row">
                                               <div class="col-sm-9">
                                                   <img src="bobina3.jpg" alt="Plastico bolha Soft Micras" class="th radius" width="40" height="40">
                                                   Plastico Soft Micras
                                               </div>
                                               <div class="col-sm-3">
                                                   <input type="number" min="0" ng-model="count2">
                                               </div>
                                           </div>
                                       </h5>
                                   </li>


                               </ul>
                               <div class="row">
                                   <div class="col-sm-6">
                                       <h3 class="description">Total: {{(count1 * preco1) + (count2 * preco2) + (count3 * preco3) + (count4 * preco4) | currency}}</h3>
                                   </div>
                                   <div class="col-sm-6">
                                       <button class="button alert extend" ng-click="count1 = 0;count2 = 0;count3 = 0;count4 = 0">Limpar</button>
                                       <button class="button success extend">Finalizar</button>
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
       </div>
