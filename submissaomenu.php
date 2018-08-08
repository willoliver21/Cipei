<?php
	include 'includes/header.php';
?>
	
<!--Submissões-->
	<div class="welcome services" id="services">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Submissão</h3>
			<p align="justify" id="textoSubmissao"> 
			As submissões devem ser efetuadas no período entre <b> 22/07/2017 à <strike>10/10/2017</strike> 13/10/2017 </b>, seguindo o modelo proposto (<a href="<?php echo caminhoArquivos("Template-Artigo-CIPEI.docx"); ?>"> Word </a> e <a href="<?php echo caminhoArquivos("Template-Artigo-CIPEI.zip"); ?>"> Latex </a>) 
				e contendo de 4 a 8 páginas. Os arquivos enviados devem estar em modo <i> blind </i> (sem qualquer identificação dos autores) 
			</p>
			</br>
			</br>
			<?php
				if (isset($_SESSION['usuario'])) 
				{
				?>
				<button type="button" class="btn btn-perso col-md-2 col-md-offset-5">
									<a href="<?php echo caminhoArquivos('painel/novasub.php'); ?>" >SUBMETER </a>
				</button>
				<?php
				}else{
					
				?>
				<button type="button" class="btn btn-perso col-md-2 col-md-offset-5" href="login.php">
									<a href="<?php echo caminhoArquivos('login.php'); ?>" >LOGIN </a>
				</button>
				<?php
				};
				?>
			
		</div>
	</div>
	<!--//Submissões-->
	
	
	
	<!-- Modal submissao -->
				<div class="portfolio-modal modal fade" id="subModal1" tabindex="-1" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl"></div>
							</div>
						</div>
						<div class="portfolio-container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<h3>Artigo Completo </h3>
										<hr>
										<form name="artigos" method="post" action="<?php echo caminhoArquivos('trabalhos.php'); ?>" onsubmit="javascript: return verificaChecks();" enctype="multipart/form-data">
										

											<div class="formSubmissao">
											<div id="origemArtigos">
													
											<input type="text" class="input_forms" name="autorArtigos[]" size="30" maxlenght="30" placeholder="Autor" id="txtAutor" required="" />
											<input type="text" name="instuicaoArtigos[]" size="30" maxlenght="30" placeholder="Instituição do Autor" required=""/>
											<input class="email" type="text" placeholder="Email" required="" name="emailArtigos[]" id="mail">
											
											
													<img  src="images/mais.png" style="cursor: pointer;" onclick="duplicarCamposArtigos();" id="btnMais">
													<img  src="images/menos.png" style="cursor: pointer;" onclick="removerCamposArtigos(this);"id="btnMenos"> 
													
											</div>
											<div id="destinoArtigos">
											
											</div>
											</br>
											<input type="text" name="tituloArtigos" size="40" maxlenght="40" placeholder="Titulo" required=""/></br>
											<textarea placeholder="Resumo" name="resumoArtigos" required=""></textarea>
											<input type="text" name="chavesArtigos" size="40" maxlenght="40" placeholder="Palavras Chaves" required=""/>
											</br>
											
											<div class="formCheck">
												
												  <input type="checkbox" name="linhaPesquisa[]" value="1" > Empreendedorismo e Inovação Sustentável: fomento de inovação tecnológica em prol do desenvolvimento sustentável, com base no tripé da sustentabilidade: ambiental, econômica e social;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="2" > Redes de Computadores e Segurança da Informação: gerenciamento de redes, serviços e aplicações; segurança de dados e aplicações de redes;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="3" > Engenharia de Software e Banco de Dados: métodos, princípios e modelagem visando o desenvolvimento de aplicações; banco de dados e data mining;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="4" > Inteligência Artificial: algoritmos evolutivos; redes neurais; descoberta de conhecimento;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="5" > Desenvolvimento de aplicativos para dispositivos móveis;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="6" > Desenvolvimento de tecnologias utilizando energia solar: veículos elétricos puros, qualidade de energia, eficiência energética, eletrônica de potência, controle, sistemas embarcados;</br>
												  <input type="checkbox" name="linhaPesquisa[]" value="7" > Estudos teóricos e práticos: trabalhos voltados para a educação sob a ótica da interdisciplinaridade;</br>
												  <a></br>
                    								<input type="file" name="arquivo" id="arquivo" accept=".pdf" required=""></br></div></a></br>
												  
												</br>
												</div>
												
											<p> <u> OBS: </u> O artigo deve seguir o padrão disponibilizado e ser enviado em modo <i> blind </i> </p>
                    						</div>
                    						<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="ENVIAR" >
                    						</form>
                    						<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				<div class="portfolio-modal modal fade" id="subModal2" tabindex="-1" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl"></div>
							</div>
						</div>
						<div class="portfolio-container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<h3>Banner</h3>
										<hr>
										
										<form name="banner" method="post" action="banner.php">
											<div class="formSubmissao">
											<div id="origemBanner">
													
											<input type="text" name="autorBanner[]" size="30" maxlenght="30" placeholder="Nome do Autor" id="txtAutor" required="" />
											<input type="text" name="instuicaoBanner[]" size="30" maxlenght="30" placeholder="Instituição do Autor" id="instituicao" required="" />
											<input class="email" type="text" placeholder="Email" required="" name="emailBanner[]" id="mail">
											
													<img  src="<?php echo caminhoArquivos('images/mais.png'); ?>" style="cursor: pointer;" onclick="duplicarCamposBanner();" id="btnMais">
													<img  src="<?php echo caminhoArquivos('images/menos.png'); ?>" style="cursor: pointer;" onclick="removerCamposBanner(this);"id="btnMenos"> 
											</div>
											<div id="destinoBanner">
											</div>
											</br>
											<input type="text" name="tituloBanner" size="40" maxlenght="40" placeholder="Titulo" required=""/></br>
											<textarea placeholder="Resumo" name="resumoBanner" required=""></textarea>
											</br>
											
											</br>
                    								<input type="file" name="arquivo" id="Arquivo" accept=".pdf,.jpg" required=""></br>
                    						</br>
											
											
									</div>	
                    						<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="ENVIAR" >
                    					</form>
										<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
									</div>
								
							</div>
						</div>
					</div>
				</div>
				</div>
				
				<div class="portfolio-modal modal fade" id="subModal3" tabindex="-1" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl"></div>
							</div>
						</div>
						<div class="portfolio-container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<h3>Oficinas</h3>
										<hr>
											<form name="oficinas" method="post" action="oficina.php">
												<div class="formSubmissao">
												<div id="origemOficinas">
														
												<input class="form-control" type="text" name="autorOficina[]" size="30" maxlenght="30" placeholder="Nome do Autor" id="txtAutor" required="" />
												<input type="text" name="instuicaoOficina[]" size="30" maxlenght="30" placeholder="Instituição do Autor" required="" />
												<input type="text" name="telefoneOficina[]" size="30" maxlenght="30" placeholder="Telefone do Autor" id="telefone" />
												<input class="email" type="text" placeholder="Email" required="" name="mailOficina[]" id="mail">
		
													<img  src="images/mais.png" style="cursor: pointer;" onclick="duplicarCamposOficinas();" id="btnMais">
													<img  src="images/menos.png" style="cursor: pointer;" onclick="removerCamposOficinas(this);"id="btnMenos"> 
													
												</div>
												<div id="destinoOficinas">
												</div>
												</br>
												<input type="text" name="tituloOficina" size="40" maxlenght="40" placeholder="Título" required="" />
												</br>
												<textarea placeholder="Descrição" name="resumoOficina" required=""></textarea>
												</br>
												<input type="text" name="cargaHorariaOficina" size="40" maxlenght="40" placeholder="Carga Horária" required="" />
												</br>
												<input type="text" name="recursosTecnologicos" size="40" maxlenght="100" placeholder="Recursos Tecnológicos Necessários" required="" />
												</br>
												<input type="text" name="quantidadePessoas" size="40" maxlenght="40" placeholder="Limite de participantes" required="" />
												</br>
												</div>
	                    						<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="ENVIAR" >
                    						</form>
											<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
<!-- // Modal submissao -->
    
<?php
	include 'includes/footer.php';
?>