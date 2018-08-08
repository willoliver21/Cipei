<!DOCTYPE html>
<?php
	error_reporting(0);

	include 'includes/conexao.php';
	include 'includes/config.php';
?>

<html>
<head>
	<title> 3º CIPEI </title>

	
	<!--Mobile versão-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CONFIGURAÇÕES -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação; CIPEI; Trabalhos Científicos; Produção Científica; Artigos; Banners" />
	<meta name="description" content="Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação é um congresso voltado para alunos do ensino superior, ofertando mostra de trabalhos científicos, palestras, oficinas, minicursos, entre outros." />
	
	<!-- CSS -->
    <link href="<?php echo caminhoArquivos('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo caminhoArquivos('css/bootstrap.css'); ?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo caminhoArquivos('css/style.css'); ?>" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo caminhoArquivos('css/animate.css'); ?>" rel="stylesheet" type="text/css" media="all">	
	
	<!-- FONTES -->
	<link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>	

	<!-- ICONE -->
	<link rel="icon" href="<?php echo caminhoArquivos('images/favicon.ico'); ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo caminhoArquivos('images/favicon.ico'); ?>" type="image/x-icon"/>
	
	<!-- JS -->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="<?php echo caminhoArquivos('js/jquery-1.11.1.min.js'); ?>"></script> 
	<script src="<?php echo caminhoArquivos('js/wow.min.js'); ?>"></script>
	<script src="<?php echo caminhoArquivos('js/script.js'); ?>"></script>
	
	<script type="text/javascript">
		 new WOW().init();
	
		jQuery(document).ready(function($) 
		{
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
		
		function validaMail (input)
		{ 
			if (input.value != document.getElementById('mail').value) 
			{
				input.setCustomValidity('Email diferente!');
			} 
			else 
			{
				input.setCustomValidity('');
			}
		}	
	</script>


</head>
<body>
	
<div class="msgResultado">
	<?php
		if(isset($_GET['m']))
			echo base64_decode($_GET['m']);
	?>
	</div>
	<!--banner-->
	<div  id="home" class="banner">
		<div class="banner-info">
			<div class="banner-top">
				
				<div class="container">
					<div class="col-md-6 banner-top-left wow slideInDown animated" data-wow-delay=".5s">
						<p style="color: white; position: relative; margin-top: 10px; font-size: 18px;">
							De 16 a 20 de outubro de 2017 em Três Lagoas-MS
						</p>
						<br clear="all">
						<p>
							<a href="https://www.facebook.com/cipei.ifms" class="fb" target="_blank" style="margin-top: 0px !important; float: left !important; margin-left: 0px !important;"> 
								<span> f </span>
							</a>
						</p>
					</div>
					<div class="col-md-6 banner-top-right wow slideInDown animated" data-wow-delay=".5s">
						<div class="col-md-8">
							
						</div>
						<div class="col-md-4">
							<?php
							if (isset($_SESSION['usuario'])) 
							{
								?>
							<button type="button" class="btn loginindex btn-perso">
								<li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="btn-logar">
			                        <?php
		                            echo $row_dados['usuario'];
		                            ?>
		                          
		                          <b class="caret"></b></a>
			                        <ul class="dropdown-menu animated fadeInUp">
				                        <li><a href="<?php echo caminhoArquivos('painel/painel.php'); ?>"> Painel </a></li>
				                        <li><a href="<?php echo caminhoArquivos('logout.php'); ?>"> Sair </a></li>
			                        </ul>
			                      </li>
							</button>
							 <?php   
							}
							else
							{
								?>
							<button type="button" class="btn loginindex btn-perso">
								<a href="<?php echo caminhoArquivos('login.php'); ?>" >Login </a>
							</button>
							  <?php
							}
							
							
							
							?>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="banner-text">
				<h1 class="wow slideInLeft animated" data-wow-delay=".5s">CIPEI</h1>
				<p class="wow slideInRight animated" data-wow-delay=".5s">3º Congresso Interdisciplinar em Pesquisa,</br>Empreendedorismo e Inovação</p>
				<p class="wow slideInRight animated" data-wow-delay=".5s"> <a href="http://www.ifms.edu.br" title="Instituto Federal de Mato Grosso do Sul" target="_blank"><img src="<?php echo caminhoArquivos('images/logo_ifms.png'); ?>" alt="Instituto Federal do Mato Grosso do Sul" title="Insituto Federal do Mato Grosso do Sul"></a></p>
			</div>
			<!--Navegação-->
			<div class="top-nav wow">
				<div class="container">
					<div class="navbar-header logo">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							Menu
						</button>
					</div>
					<!-- Menu -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="menu">
							<ul class="nav navbar">
								<li class="menu-item menu-item-current"><a target="_self" href="<?php echo caminhoArquivos('principal/'); ?>">Principal</a></li>
								<li class="menu-item"><a target="_self" href="<?php echo caminhoArquivos('programacao/'); ?>">Programação</a></li>
								<li class="menu-item"><a target="_self" href="<?php echo caminhoArquivos('inscricoes/'); ?>">Inscrições</a></li>
								<li class="menu-item"><a target="_self" href="<?php echo caminhoArquivos('submissao/'); ?>">Submissão</a></li>
								<li class="menu-item"><a target="_self" href="<?php echo caminhoArquivos('galeria/'); ?>">Galeria</a></li>
								<li class="menu-item"><a target="_self" href="<?php echo caminhoArquivos('contato/'); ?>">Contato</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script src="js/classie.js"></script>
						<script>
							(function() {
								[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
									var menuItems = menu.querySelectorAll('.menu-link'),
										setCurrent = function(ev) {
											ev.preventDefault();

											var item = ev.target.parentNode; // li
											
											// return if already current
											if( classie.has(item, 'menu-item-current') ) {
												return false;
											}
											// remove current
											classie.remove(menu.querySelector('.menu-item-current'), 'menu-item-current');
											// set current
											classie.add(item, 'menu-item-current');
										};
									
									[].slice.call(menuItems).forEach(function(el) {
										el.addEventListener('click', setCurrent);
									});
								});
							})(window);
						</script>
					</div>
					<!-- script-for sticky-nav -->
					<script>
					$(document).ready(function() {
						 var navoffeset=$(".top-nav").offset().top;
						 $(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".top-nav").addClass("fixed");
							}else{
								$(".top-nav").removeClass("fixed");
							}
						 });
						 
					});
					
					//Validar checkbox
					function verificaChecks() 
					{
						var cont = 0;
						var aChk = document.getElementsByName("linhaPesquisa[]");
						for (var i=0; i<aChk.length; i++)
						{  
							if (aChk[i].checked == true)
							{  
								cont++;	
							}  
						}
						
						if(cont == 0)
						{
							alert("Selecione uma linha de pesquisa!");
							return false;
						}
					} 
					</script>
					<!-- /script-for sticky-nav -->
				</div>
			</div>	
			<!--//Navegação-->
		</div>
	</div>
	<!--//banner-->
	
<!--Sobre-->
	<div class="welcome" id="about">
		<div class="container">
				<h2 class="title wow slideInDown animated" data-wow-delay=".5s">Sobre</h2>
				<p align="justify">O Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação (CIPEI) visa fomentar e difundir as discussões sobre as temáticas dos cursos de graduação do Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul (IFMS) – Campus Três Lagoas e, além disso, o evento promove a difusão de uma cultura em prol do empreendedorismo e da inovação tecnológica em consonância com suas áreas temáticas específicas. O Congresso é um estímulo à ciência e à pesquisa tecnológica, considerados pilares do Instituto Federal. O CIPEI é continuação e evolução da Semana de Computação do Ensino Superior (SECOMP), que iniciou em 2013, no mesmo Campus do IFMS, cujo objetivo consistia em oferecer uma programação de palestras e workshops visando discussões em torno dos temas emergentes sobre a área da Computação. A SECOMP teve sua segunda edição em 2014 e contou com uma maior participação tanto do público interno, quanto do público externo. Em 2015, com o início da oferta do curso de Tecnologia em Automação Industrial, além da abertura do curso de Tecnologia em Análise e Desenvolvimento de Sistemas, os temas se expandiram e, com isso, a Semana de Computação deu início ao Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação.</p>
				</br></br></br>
				
				<div class="col-md-6">
				<div class="equipelink">
				<p class="text"><a href="#subEquipe" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal"/>
						<h1>Equipe Fundadora</h1>
			    </div>
			    </div>
			    <div class="col-md-6">
			    	<div class="comissaolink">
			    	<p class="text"><a href="#subComissao" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal"/>
										<h1>Comissão Organizadora</h1>
									</a>
					</div>
			    </div>
			</p>
		</div>
			
	</div>
	<!--//Sobre-->
	
<!--//Modal Sobre -->
<div class="portfolio-modal modal fade" id="subEquipe" tabindex="-1" aria-hidden="true">
<div class="modal-content">
	<div class="close-modal" data-dismiss="modal">
		<div class="lr">
		<div class="rl"></div>
	</div>
	</div>
		<div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
			           <table class="table table-condensed table-hover" data-wow-delay=".5s"> <!--tentei mudar várias linhas do bootstrap.css, por exemplo: linha 2273 do bootstrap.css "color: #3d9a97" e a linha 2286 "text-align: center;" nada acontece-->
			               <thead>
			                   <tr class="titulotable">
			                       <th>Nome</th>
			                       <th>Instituição</th>
			                       <th>Cidade</th>
			                       <th>Cargo</th>
			                   </tr>
			               </thead>
			               <tbody class="listhover">
			                   <tr>
			                       <td>Maria Neusa de Lima Pereira</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Ex Reitora</td>
			                    </tr>
			                    <tr>
			                       <td>Esp. Eduardo Hiroshi Nakamura</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Edson dos Santos Bortoloto</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Elisangela Citro Turci</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Douglas Francisquini Toledo</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Denis Rogério da Silva</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Reitor</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Habib Asseiss Neto</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Esp. José Aparecido Jorge Júnior</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Reitor</td>
			                    </tr>
			                    <tr>
			                       <td>Laura Rodrigues Correia Galdino</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Auxiliar em Administração</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Lígia Arnedo Perassa</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Técnico de Laboratório</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Murilo Miceno Frigo</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Esp. Maraísa da Silva Guerra</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Márcio Teixeira Oliveira</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Me. Marcus Felipe Calori Jorgetto</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Dr. Edson Italo</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Drª. Suellen Moreira Oliveira</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			                    <tr>
			                       <td>Raquel Francisca de Jesus Santos</td>
			                       <td>Instituto Federal de Mato Grosso do Sul</td>
			                       <td>Câmpus Três Lagoas</td>
			                       <td>Docente</td>
			                    </tr>
			               </tbody>
			           </table>
			           </div> <!--table responsive-->
        </div>
    	</div>
    	

</div>
</div>
				
<div class="portfolio-modal modal fade" id="subComissao" tabindex="-1" aria-hidden="true">
<div class="modal-content">
	<div class="close-modal" data-dismiss="modal">
	<div class="lr">
	<div class="rl"></div>
	</div>
	</div>
	<div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">
			           <table class="table table-condensed table-hover"> 
			               <thead>
			                   <tr class="titulocomissao">
			                       <th>Nome</th>
			                       <th>Cargo na Comissão</th>
			                   </tr>
			               </thead>
			               <tbody class="listhover">
			               		<tr>
			                       <td>Douglas Francisquini Toledo</td>
			                       <td>Presidente</td>
			                    </tr>
			                    <tr>
			                       <td>Suellen Moreira Oliveira</td>
			                       <td>Vice-Presidente</td>
			                    </tr>
			                    <tr>
			                       <td>Denis Rogério da Silva</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Eduardo Hiroshi Nakamura</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Elisangela Citro Turci</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Márcio Teixeira Oliveira</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Maraísa da Silva Guerra</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Murilo Miceno Frigo</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Alan Rodrigo Antunes</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Edson da Silva Castro</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Edson dos Santos Bortoloto</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Jales Lucio de Andrade Junior</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Kader Carvalho Assad</td>
			                       <td>Membro</td>
			                    </tr>
			                     <tr>
			                       <td>Marco Aurélio Ferreira</td>
			                       <td>Membro</td>
			                    </tr>
			                     <tr>
			                       <td>Rogério Alves dos Santos Antoniassi</td>
			                       <td>Membro</td>
			                    </tr>
			                     <tr>
			                       <td>Suzana de Morais Berriel</td>
			                       <td>Membro</td>
			                    </tr>
			                    <tr>
			                       <td>Vladimir Piccolo Barcelos</td>
			                       <td>Membro</td>
			                    </tr>
			                    
			                    
			               </tbody>
			           </table>
			           </div> <!--table responsive-->
        </div>
    	</div>
									<br clear="all"/>
</div>
</div>
<div class="welcome footer">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
				<span> Parceiros: </span>  
				<ul class="social-icons">
					<li><a href="https://www.ufms.br" class="ufms" target="_blank"></a></li>
					<li><a href="http://www.unesp.br" class="unesp" target="_blank"></a></li>
				</ul>
				<p> &copy; Copyright Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação | 2017  <b>by</b> Wilson Oliver, Matias Uchôa & Douglas Toledo (IFMS-Três Lagoas) </a></p>
			</div> 
		</div>
	</div>
	<script src="<?php echo caminhoArquivos('js/bootstrap.js'); ?>"></script>
</body>
</html>