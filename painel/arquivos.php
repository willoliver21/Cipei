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
	header("Location: ../login.php");
}

$dados = mysql_query("SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
$row_dados = mysql_fetch_assoc($dados);
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
							<li class="current"><a href="arquivos.php"><i class="glyphicon glyphicon-link"></i> Submissões</a></li>
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
									<div class="panel-title">
										<h1> Minhas Submissões </h1>
									</div>


								</div>
								<div class="panel-body">
									<h3> Trabalhos: </h3>
									<hr>
									<ul style="font-style: italic; height: 30px; line-height: 30px; vertical-align: middle;">
										<?php
										$query = "SELECT DISTINCT t.id as idTrabalho, t.titulo as tituloTrabalho
										FROM autor_usuario au
										INNER JOIN autor_trabalho at ON at.id_autor = au.id_autor
										INNER JOIN trabalho t ON t.id = at.id_trabalho
										WHERE au.id_usuario = ". $codigoUsuario ."
										ORDER BY t.id DESC
										";

										$sql = mysql_query($query);

										while($r = mysql_fetch_assoc($sql))
										{
											?>
											<li style="list-style: azure;">
												<a href="../uploads/<?php echo $r['idTrabalho']; ?>.pdf" style="font-size: 14px;" title="Baixar trabalho" >
													<?php echo $r['tituloTrabalho']; ?>
												</a>
											</li>
											<?php
										}
										?>
									</ul>
								</div>
								<br clear="all">
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
