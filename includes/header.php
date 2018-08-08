<!DOCTYPE html>
<?php
	error_reporting(0);

	include 'conexao.php';
	include 'config.php';
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