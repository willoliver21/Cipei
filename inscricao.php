<?php
error_reporting(0);
include 'includes/config.php';
include 'includes/conexao.php';


$name	=	trim($_POST['name']);
$insti	=	trim($_POST['insti']);
$mail	=	trim($_POST['mail']);
$ident	=	trim($_POST['ident']);


$conexao = mysql_connect($host, $user, $pass) OR die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

$sql = mysql_query("INSERT INTO inscritos(nome, instituicao, email, identificacao) VALUES('$name', '$insti', '$mail', '$ident')", $conexao);

mysql_close($conexao);

if($sql)
{
	header("Location:". caminhoArquivos("inscricoes/".base64_encode("Inscrição efetuada com sucesso!")));
	exit();
}

header("Location:". caminhoArquivos("inscricoes/".base64_encode("Sua inscrição não pôde ser efetuada!")));
?>
