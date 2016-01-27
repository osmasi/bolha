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

<?php $this->assign('title', 'Fale Conosco'); ?>
<!-- Section: contact -->
<section id="contact" class="home-section text-center">
	<div class="heading-contact marginbot-50">
		<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">

				<div class="section-heading">
				<h2>Ficou alguma dúvida? <br>Deseja fazer um orçamento?</h2>
				<h2>Entre em contato</h2>
				<p>Estamos a sua disposição!</p>
				</div>

			</div>
		</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
    		<div class="col-lg-10 col-md-offset-1">

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

				<div class="boxed-grey">
            		<form id="contact-form">
            			<div class="row">
                			<div class="col-md-3">
                    			<div class="form-group">
                        			<label for="name">
                            			Nome</label>
                        			<input type="text" class="form-control" id="name" placeholder="Seu nome" required="required" />
                    			</div>
			                    <div class="form-group">
			                        <label for="email">
			                            Endereço de E-mail</label>
			                        <div class="input-group">
			                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
			                            </span>
			                            <input type="email" class="form-control" id="email" placeholder="Seu email" required="required" /></div>
			                    </div>
			                    <div class="form-group">
			                        <label for="subject">
			                            Subject</label>
			                        <select id="subject" name="subject" class="form-control" required="required">
			                            <option value="na" selected="">Escolha um:</option>
			                            <option value="orcamento">Orçamento</option>
			                            <option value="bolha">Plástico Bolha</option>
			                            <option value="papelao">Papelão</option>
			                            <option value="outros">Outros</option>
			                        </select>
			                    </div>
                			</div>
			                <div class="col-md-9">
			                    <div class="form-group">
			                        <label for="name">
			                            Mensagem</label>
			                        <textarea name="message" id="message" class="ckeditor form-control" rows="9" cols="30" required="required"
			                            placeholder="Mensagem"></textarea>
			                    </div>
			                </div>
			                <div class="col-md-3">
			                    <button type="submit" class="btn btn-skin pull-left" id="btnContactUs">
			                        Enviar Mensagem</button>
			                </div>
            			</div>
            		</form>
        		</div>
    		</div>
		</div>
	</div>
</section>
<!-- /Section: contact -->
