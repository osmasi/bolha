<?php
/**
 * @link          http://osmasi.16mb.com/bolha
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 2.7.2
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>

<?php $this->assign('title', 'Serviços'); ?>
<!-- Section: services -->
<section id="service" class="home-section text-center">

	<div class="heading-about marginbot-50">
		<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">

				<div class="section-heading">
				<h2>Nossos Serviços</h2>
				<p>Distribuidor autorizado das principais marcas de plástico bolha e papelão do mescado.</p>
				</div>

			</div>
		</div>
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-3">

			<div class="service-box">
				<div class="service-icon">
					<i class="fa fa-code fa-3x"></i>
				</div>
				<div class="service-desc">
					<h5>Distribuidor</h5>
					<p>Sempre os melhores produtos do mercado.</p>
				</div>
			</div>

		</div>
		<div class="col-sm-3 col-md-3">

			<div class="service-box">
				<div class="service-icon">
					<i class="fa fa-suitcase fa-3x"></i>
				</div>
				<div class="service-desc">
					<h5>Consultoria</h5>
					<p>Consultores treinados para lhe oferecer o produto adequado à sua necessidade.</p>
				</div>
			</div>

		</div>
		<div class="col-sm-3 col-md-3">

			<div class="service-box">
				<div class="service-icon">
					<i class="fa fa-cog fa-3x"></i>
				</div>
				<div class="service-desc">
					<h5>Garantia</h5>
					<p>Garantia de fáfria em todas as linhas de produtos.</p>
				</div>
			</div>

		</div>
		<div class="col-sm-3 col-md-3">

			<div class="service-box">
				<div class="service-icon">
					<i class="fa fa-rocket fa-3x"></i>
				</div>
				<div class="service-desc">
					<h5>Agilidade</h5>
					<p>Agilidade na entrega a nível nacional.</p>
				</div>
			</div>

		</div>
	</div>
	</div>
</section>
<!-- /Section: services -->
