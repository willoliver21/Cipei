<?php
error_reporting(0);

include 'includes/conexao.php';

$conexao = mysql_connect($host, $user, $pass) OR die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

$email = trim($_POST['email']);

$dados = mysql_query("SELECT * FROM usuarios WHERE email = '". $email ."'", $conexao);

mysql_close();

if($dados)
{
	$row_dados = mysql_fetch_assoc($dados);

	if($row_dados)
	{
		$remetente	= "no-reply@cipei.luckesolutions.com";
		$destino	= $email;
		$assunto	= "[ContatoSiteCIPEI] Esqueci minha senha";
		$cabecalho	= "De: no-reply@cipei.luckesolutions.com";

		$mensagem 	.= "A senha para o e-mail " . $email ." foi requisitada por meio do 'Esqueceu sua senha?'\r\n";
		$mensagem 	.= "Senha: " . $row_dados['senha'] ."\r\n";

		if(Mail($destino, $assunto, $mensagem, $cabecalho))
		$resposta = "E-mail enviado com sucesso!";
		else
		$resposta = "Erro ao enviar o e-mail. Erro no servidor.";
	}
}

header("Location: esqueciminhasenha.php?m=".base64_encode($resposta));
?>
