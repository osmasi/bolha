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

<?php $this->assign('title', 'Comércio'); ?>
<body data-spy="scroll">

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="slogan">
			<h1>Bem vindo ao Comércio Ltda!</h1>
			<p>A maior distribuidora de plástico bolha e papelão da região da serra</p>
			<a href="/bolha/pages/about" class="btn btn-skin scroll">Leia Mais</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center bg-gray">
		<div class="heading-about marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">

					<div class="section-heading">
					<h2>Nossos Produtos</h2>
					<p>Somos especialistas em bobinas de plástico bolha e bobinas de papelão</p>
					<a href="/bolha/loja/index" class="btn btn-skin scroll">Loja</a>
					</div>

				</div>
			</div>
			</div>
		</div>
		<div class="container">
	        <div class="row">
	            <?php $i = 0; 
	            foreach ($produtosHome as $item) { ?>
	            <div class="col-xs-6 col-sm-3 col-md-3">
	                <div class="team boxed-grey">
	                    <div class="inner">
							<h5><?php echo $item['Produto']['nome'] ?></h5>
	                        <p class="subtitle"><?php echo $item['Produto']['descricao'] ?></p>
	                        <div class="avatar"><?php echo $this->Html->image('produtos/'.$item['Produto']['imagem'], array('width' => '200px', 'height' => '200px')); ?> </div>
	                    </div>
	                </div>
	            </div>			
	            <?php $i++; if ($i >= 4) break; } ?>
	        </div>
		</div>
	</section>
	<!-- /Section: about -->


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

</body>

</html>
