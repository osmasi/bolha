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
					<a href="/bolha/pages/about" class="btn btn-skin scroll">Loja</a>
					</div>

				</div>
			</div>
			</div>
		</div>
		<div class="container">

        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
												<h5>SIMP-BOBINA</h5>
                        <p class="subtitle">BOBINA DE PLASTICO BOLHA 10mm SIMP-BOBINA 1,30m X 100m</p>
                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
						<div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
												<h5>SOFT</h5>
                        <p class="subtitle">BOBINA DE PLASTICO BOLHA SOFT 1,30x100m</p>
                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive" /></div>
                    </div>

									</div>
            </div>
						<div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
												<h5>SOFT MICRAS</h5>
                        <p class="subtitle">BOBINA DE PLASTICO BOLHA SOFT 40 MICRAS 1,30m x 100m</p>
                        <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
						<div class="col-xs-6 col-sm-3 col-md-3">

                <div class="team boxed-grey">
                    <div class="inner">
												<h5>KRAFT PURO</h5>
                        <p class="subtitle">BOBINA DE PAPEL KRAFT PURO 60cm x 200m x 80g/m²</p>
                        <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>

            </div>
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
