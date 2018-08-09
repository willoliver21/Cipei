<!DOCTYPE html>

<?php
error_reporting(0);

//conexão
include '../includes/conexao.php';



if (isset($_SESSION['usuario']))
{
	$codigoUsuario = $_SESSION['id_usuario'];

}
else
{
	header("Location: login.php");
}

$dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
$row_dados = mysqli_fetch_assoc($dados);

?>

<html>
<head>
	<title>Painel</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- ICONE -->
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- styles -->
	<link href="../css/stylesp.css" rel="stylesheet">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<!-- Logo -->
					<div class="logo">
						<h1><a href="../index.php">CIPEI</a></h1>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-lg-12"></div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="navbar navbar-inverse" role="banner">
						<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<?php
										echo $row_dados['usuario'];
										?>
										<b class="caret"></b></a>
										<ul class="dropdown-menu animated fadeInUp">
											<li><a href="../logout.php">Sair</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box" style="display: block;">
						<ul class="nav">
							<!-- Menu -->
							<li><a href="painel.php"><i class="glyphicon glyphicon-home"></i> Principal</a></li>
							<li><a href="perfil.php"><i class="glyphicon glyphicon-pencil"></i> Meus Dados</a></li>
							<li><a href="autor.php"><i class="glyphicon glyphicon-user"></i> Cadastro de Autores</a></li>
							<li><a href="arquivos.php"><i class="glyphicon glyphicon-link"></i> Submissões</a></li>
							<li class="current"><a href="arquivos.php"><i class="glyphicon glyphicon-link"></i> Novas Submissões</a></li>
							<li><a href="../index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar para CIPEI</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-large">
								<div class="panel-heading tirar-padding">
									<div class="panel-title"><h1>Bem Vindo
										<?php
										echo $row_dados['nome'];
										?>
									</h1></div>


								</div>
								<div class="panel-body">

									<h3> Novas Submissões </h3>
									<hr>
									<form class="wow fadeInUp animated" data-wow-delay=".5s" name="artigos" method="post" action="trabalhos.php" onsubmit="javascript: return verificaChecks();" enctype="multipart/form-data">
										<h3>Autores </h3>

										<?php
										$contador = 1;

										//Autores
										$sqlAutores = "SELECT a.id as idAutor, a.nome as nomeAutor, a.instituicao as instAutor
										FROM autor_usuario au
										INNER JOIN autor a ON a.id = au.id_autor
										WHERE au.id_usuario = '$codigoUsuario'";


										$autores = mysqli_query($conexao, $sqlAutores);

										if(mysqli_num_rows($autores) > 0)
										{
											while($row_autores = mysqli_fetch_assoc($autores))
											{
												?>
												<p style="float: left;">
													<input type="checkbox" id="inlineCheckbox1" name="autorcheck[]" value="<?php echo $row_autores['idAutor']; ?>" ><?php echo $row_autores['nomeAutor']; ?>
													<h4 class="linha_autor">

														<?php

														$idAutor = $row_autores['idAutor'];
														?>
													</h4>
												</p>


												<?php
												if($contador >= 3)
												{
													$contador = 0;
													echo "<br clear = 'all' />";
												}
												$contador++;
											}
										}
										else
										{
											?>
											<h4> Nenhum autor cadastrado! </h4>
											<?php
										}

										?>

										<br clear = 'all' />


										<div class="formSubmissao">

											<br>

											<div class="input-sub">
												<div class="form-group">
													<label for="exampleInputTitulo">Título do Artigo</label>
													<input type="text" required="" name="tituloArtigos" class="form-control" id="exampleInputEmail1" placeholder="Título">
												</div>
												<div class="form-group">
													<label for="exampleInputChave">Palavras Chaves</label>
													<input name="chavesArtigos" required="" type="text" class="form-control" id="exampleInputEmail1" placeholder="Palavras Chaves">
												</div>
												<div class="form-group">
													<label for="exampleInputResumo">Resumo</label>
													<textarea placeholder="Resumo" required="" name="resumoArtigos" class="form-control" rows="8"></textarea>
												</div>

												<br>
											</div>

											<div class="formCheck">
												<input type="checkbox" name="linhaPesquisa[]" value="1" > Empreendedorismo e Inovação Sustentável: fomento de inovação tecnológica em prol do desenvolvimento sustentável, com base no tripé da sustentabilidade: ambiental, econômica e social;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="2" > Redes de Computadores e Segurança da Informação: gerenciamento de redes, serviços e aplicações; segurança de dados e aplicações de redes;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="3" > Engenharia de Software e Banco de Dados: métodos, princípios e modelagem visando o desenvolvimento de aplicações; banco de dados e data mining;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="4" > Inteligência Artificial: algoritmos evolutivos; redes neurais; descoberta de conhecimento;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="5" > Desenvolvimento de aplicativos para dispositivos móveis;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="6" > Desenvolvimento de tecnologias utilizando energia solar: veículos elétricos puros, qualidade de energia, eficiência energética, eletrônica de potência, controle, sistemas embarcados;</br>
												<input type="checkbox" name="linhaPesquisa[]" value="7" > Estudos teóricos e práticos: trabalhos voltados para a educação sob a ótica da interdisciplinaridade;</br>
												<a>
												</br>
											</br>
											<input type="file" name="arquivo" id="arquivo" accept=".pdf" required="">
										</br>
									</div>
								</a>
								<p> <u> OBS: </u> O artigo deve seguir o padrão disponibilizado e ser enviado em modo <i> blind </i> </p>
							</br>
							<input class="btn btn btn-perso col-md-2 col-md-offset-5" type="submit" value="Enviar">
						</div>


					</div>

				</form>
			</div>
			<footer>
				<div class="container">

					<div class="copy text-center">
						&copy; Copyright Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação | 2017  <b>by</b> Wilson Oliver, Matias Uchôa & Douglas Toledo (IFMS-Três Lagoas) <a href='../index.php'>CIPEI</a>
					</div>

				</div>
			</footer>
		</div>
	</div>

</div>
</div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
