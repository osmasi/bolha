<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'WWW');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- Bootstrap Core CSS -->
	<link href="/bolha/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Fonts -->
	<link href="/bolha/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/bolha/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="/bolha/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="/bolha/css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="/bolha/css/style.css" rel="stylesheet">
	<link href="/bolha/color/default.css" rel="stylesheet">


		<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
	<!-- DataTables -->
    <link href="/bolha/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="/bolha/css/datatables/css/dataTables.bootstrap.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li><a href="/bolha/loja" class="gn-icon gn-icon-archive">Loja</a></li>
							<li><a href="/bolha/pages/service" class="gn-icon gn-icon-cog">Serviços</a></li>
							<li><a href="/bolha/pages/about" class="gn-icon gn-icon-download">Sobre</a></li>
							<li><a href="/bolha/pages/help" class="gn-icon gn-icon-help">Contato</a></li>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="/bolha">COMÉRCIO LTDA</a></li>
			<li><ul class="company-social">
            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>	</li>
		</ul>
	</div>
	<div id="container" class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
            <div id="content" class="content">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<br>
					<br>
					<br>
					<br>
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
            </div>
        </div>
    </div>

		<div id="footer" class="navbar-fixed-bottom">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<p>Copyright &copy; 2015</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- Core JavaScript Files -->
	<script src="/bolha/js/jquery.min.js"></script>
	<script src="/bolha/js/bootstrap.min.js"></script>
	<script src="/bolha/js/jquery.easing.min.js"></script>
	<script src="/bolha/js/classie.js"></script>
	<script src="/bolha/js/gnmenu.js"></script>
	<script src="/bolha/js/jquery.scrollTo.js"></script>
	<script src="/bolha/js/nivo-lightbox.min.js"></script>
	<script src="/bolha/js/stellar.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="/bolha/js/custom.js"></script>
	<!-- Angular JS -->
	<script src="/bolha/js/angular.min.js"></script>
	<!-- Datatables -->
        <script src="/bolha/js/datatables/js/jquery.dataTables.js"></script>
        <script src="/bolha/js/datatables/js/dataTables.bootstrap.js"></script>

        <script>
           $(document).ready(function () {
               otable1 = $('#dataTables').dataTable( {
                   "language": {
                       "emptyTable":     "Não há dados disponíveis na tabela",
                       "info":           "Mostrando _START_ para _END_ de _TOTAL_ ",
                       "infoEmpty":      "Mostrando 0-0 de 0 entradas",
                       "infoFiltered":   "(filtrada de _MAX_ entradas totais)",
                       "infoPostFix":    "",
                       "thousands":      ",",
                       "lengthMenu":     "Mostrar _MENU_ entradas",
                       "loadingRecords": "Carregando...",
                       "processing":     "Processando...",
                       "search":         "Pesquisar: ",
                       "zeroRecords":    "Nenhum registro correspondente encontrado",
                       "paginate": {
                           "first":      "Primeiro",
                           "last":       "Último",
                           "next":       "Póximo",
                           "previous":   "Anterior"
                       },
                   },
               });

							 $('footer').mouseover(function(){
								 $('footer').fadeOut('slow');
							 });

						});

    	</script>

		<script>

			 var app = angular.module('myApp', []);
    		app.controller('myCtrl', function ($scope) {

        $scope.count = 0;
        $scope.qtdTotal = 0;

        $scope.addProduto = function () {
            $scope.id = 0;
            $scope.nome = '';
            $scope.valor = 0;
            $scope.qtd = 0;
            $scope.quantidade = 0;
        };

        $scope.prod = 0;
        $scope.total = 0;
        $scope.totalProduto = 0;


    });

		</script>

		<?php
        	echo $this->Html->script('ckeditor/ckeditor');
     	?>

</body>
</html>
