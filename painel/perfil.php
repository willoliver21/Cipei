<!DOCTYPE html>

<?php
error_reporting(0);
include '../includes/conexao.php';

session_start();

if (isset($_SESSION['usuario']))
{
	$codigoUsuario = $_SESSION['id_usuario'];

}
else
{
	header("Location: login.php");
}

$dados = mysql_query("SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
$row_dados = mysql_fetch_assoc($dados);
?>

<html>
<head>
	<title>Perfil</title>
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
							<li class="current"><a href="perfil.php"><i class="glyphicon glyphicon-pencil"></i> Meus Dados</a></li>
							<li><a href="autor.php"><i class="glyphicon glyphicon-user"></i> Cadastro de Autores</a></li>
							<li><a href="arquivos.php"><i class="glyphicon glyphicon-link"></i> Submissões</a></li>
							<li><a href="novasub.php"><i class="glyphicon glyphicon-link"></i> Novas Submissões</a></li>
							<li><a href="../index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar para CIPEI</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-large">
								<div class="panel-heading tirar-padding">
									<div class="panel-title"><h1>Meus Dados

									</h1></div>

								</div>

								<div class="container">
									<div class="panel-body">
										<div class="col-md-10 col-md-offset-1">
											<div class="table-responsive">
												<table class="table table-condensed table-hover" data-wow-delay=".5s"> <!--tentei mudar várias linhas do bootstrap.css, por exemplo: linha 2273 do bootstrap.css "color: #3d9a97" e a linha 2286 "text-align: center;" nada acontece-->
													<thead>
														<tr class="titulotable">
															<th>Nome</th>
															<th>E-mail</th>
															<th>Instituição</th>
														</tr>
													</thead>
													<tbody>
														<td><?php
														echo $row_dados['nome'];
														?>
													</td>
													<td>
														<?php
														echo $row_dados['email'];
														?>
													</td>
													<td>
														<?php
														echo $row_dados['instituicao'];
														?>
													</td>
												</tbody>
											</table>
										</div> <!--table responsive-->
									</div>
									<button type="button" class="btn btn-perso col-md-2 col-md-offset-5"><a href="alterar.php">Alterar Dados</a></button>
								</div>





							</div>
						</div>
					</div>

				</div>


				<footer>
					<div class="container">

						<div class="copy text-center">
							&copy; Copyright Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação | 2017  <b>by</b> Wilson Oliver, Matias Uchôa & Douglas Toledo (IFMS-Três Lagoas) <a href='../index.php'>CIPEI</a>
						</div>

					</div>
				</footer>

				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://code.jquery.com/jquery.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="../bootstrap/js/bootstrap.min.js"></script>
				<script src="../js/custom.js"></script>
			</body>
			</html>
