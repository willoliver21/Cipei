<?php
	include 'includes/header.php';
?>

<!--Inscrição-->
	<div class="welcome work" id="work">
		<div class="container">
			<div class="work-info">
                <h3 class="title">Inscrição</h3>
                <div class="insc-form">
                
				<p style="color: lightsalmon;">
				<?php
					if(isset($_GET['m']))
						echo base64_decode($_GET['m']) . "<br> <br>";
				?>
				</p>
				
                <form class="wow fadeInUp animated" data-wow-delay=".5s" name="inscricao" method="post" action="<?php echo caminhoArquivos('inscricao.php'); ?>" onsubmit="return ValidaForm()">
                    <input type="text" placeholder="Nome Completo" required="" name="name"></br>
                    <input class="inst" type="text" placeholder="Instituição" required="" name="insti"></br>
                    <input class="email" type="text" placeholder="Email" required="" onblur="validacaoEmailInsc(inscricao.mail)" name="mail" id="mail">
                    
                    <input class="cemail" type="text" placeholder="Confirmação de Email" required="" oninput="validaMail(this)" id="confirma_mail"></br>
                    <table required=""> 
                     	<tr>
                     	    <div class="radio">
                     	    <label>
                     		<td> <p><label for="prof"><input type="radio" name="ident" id="prof" value="professor"> Professor</label></p> </td>
                     		</label>
                     		</div>
                     	</tr>
                     	<tr>
                     	    
                     	    <div class="radio">
                     	    <label>
                     		<td> <p><label for="aluno"><input type="radio" name="ident" id="aluno" value="aluno"> Aluno</label></p> </td>
                     		</label>
                     		</div>
                     	</tr>
                     	<tr>
                     	    <div class="radio">
                     	    <label>
                     		<td> <p><label for="aluno"><input type="radio" name="ident" id="outro" value="outro"> Outro</label></p> </td>
                     		</label>
                     		</div>
                     	</tr>	
                    </table>
                    
                
                   
                    </br>
                    </p>
                    <input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="ENVIAR">
                    
                </form>
                <!--js-->
    			<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
                </div>
			</div>
		</div>
	</div>
	<!--//Inscrição-->

<?php
	include 'includes/footer.php';
?>




	