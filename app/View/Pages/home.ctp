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
									<a href="#about" class="gn-icon gn-icon-download">Sobre</a>
								</li>
								<li><a href="#service" class="gn-icon gn-icon-cog">Serviços</a></li>
								<li><a href="#works" class="gn-icon gn-icon-help">Ajuda</a></li>
								<li>
									<a href="#contact" class="gn-icon gn-icon-archive">Contato</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.html">COMÉRCIO LTDA</a></li>
				<li><ul class="company-social">
                <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>	</li>
			</ul>
	</div>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="slogan">
			<h1>Bem vindo ao Comércio Ltda!</h1>
			<p>A maior distribuidora de plástico bolha da região da serra</p>
			<a href="#about" class="btn btn-skin scroll">Leia Mais</a>
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

	<!-- Section: contact -->
  <section id="contact" class="home-section text-center">
		<div class="heading-contact marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">

					<div class="section-heading">
					<h2>Entre em contato</h2>
					<p>Estamos a sua disposição, sempre com o melhor preço do mercado.</p>
					</div>

				</div>
			</div>
			</div>
		</div>
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Endereço de E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Escolha um:</option>
                                <option value="service">Plástico Bolha</option>
                                <option value="suggestions">Papelão</option>
                                <option value="product">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar Mensagem</button>
                    </div>
                </div>
                </form>
            </div>

			<div class="widget-contact row">
				 <div class="col-lg-6">
				<address>
				  <strong>Comércio Ltd.</strong><br>
				  Big Villa 334 Awesome, Beautiful Suite 1200<br>
				  San Francisco, CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
				</div>

				<div class="col-lg-6">
				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@comercio.com</a><br />
				   <a href="mailto:#">name.name@comercio.com</a>
				</address>

				</div>
			</div>
        </div>

    </div>

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>Copyright &copy; 2015</p>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>
