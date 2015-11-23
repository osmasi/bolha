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

</head>
<body>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>search</span></a>
							</li>
							<li>
								<a href="/bolha/pages/about" class="gn-icon gn-icon-download">Sobre</a>
							</li>
							<li><a href="/bolha/pages/service" class="gn-icon gn-icon-cog">Serviços</a></li>
							<li><a href="/bolha/pages/help" class="gn-icon gn-icon-help">Ajuda</a></li>
							<li>
								<a href="/bolha/pages/contact" class="gn-icon gn-icon-archive">Contato</a>
							</li>
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
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
            </div>
        </div>
    </div>

		<div id="footer">
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

</body>
</html>
