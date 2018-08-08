<?php
	include 'includes/header.php';
?>
	
	<!--Contato -->
	<div class="welcome contact" id="contact">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Contato</h3>
			<div class="contact-row">
				<div class="col-md-6 contact-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14922.82578791035!2d-51.705717!3d-20.762689!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcaf71f3adf22558!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o+Ci%C3%AAncia+e+Tecnologia+de+Mato+Grosso+do+Sul+(IFMS)!5e0!3m2!1spt-BR!2sbr!4v1462810842147" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 contact-right wow slideInRight animated" data-wow-delay=".5s">
					
					<div class="contact-form">
						<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Entre em Contato</h3>
						
						<p style="color: lightsalmon;">
						<?php
							if(isset($_GET['m']))
								echo base64_decode($_GET['m']) . "<br> <br>";
						?>
						</p>
						
						<p><span class="glyphicon glyphicon-earphone"></span> (67) 3509-9500 </p>
					    <form class="wow fadeInUp animated" data-wow-delay=".5s" name="contato" method="post" action="<?php echo caminhoArquivos('contato.php'); ?>">
							<input type="text" placeholder="Nome" name="nome" id="nome" required>
							<input class="email" type="text" placeholder="Email" required name="mail" id="mail" onblur="validacaoEmailContato(contato.mail)">
							<input type="text" placeholder="Assunto" name="assunto" id="assunto">
							<textarea placeholder="Mensagem" name="mensagem" required></textarea>
							<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="ENVIAR" >
						</form>
					</div>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<!--accordion-->
				</div>
		</div>
</div>
	
<!--//Contato -->
<?php
	include 'includes/footer.php';
?>