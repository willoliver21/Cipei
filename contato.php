<?php
	error_reporting(0);
	include 'includes/config.php';
	
	$nome 		= trim($_POST["nome"]);
	$email 		= trim($_POST["mail"]);
	$assunto	= trim($_POST["assunto"]);
	$mensagem 	= trim($_POST["mensagem"]);

	if($nome != "" && $email != "" && $mensagem != "")
	{
		$remetente	= $email;
		$destino	= "douglas.toledo@ifms.edu.br";
		$assunto	= "[ContatoSiteCIPEI] ".$assunto;
		$cabecalho	= "De: ".$email;

		$mensagem 	= "Nome: ". $nome ."\r\n"; 
		$mensagem 	.= "E-mail: " . $email ."\r\n";		
		$mensagem 	.= "Assunto: " . $assunto ."\r\n"; 
		$mensagem 	.= "Mensagem: " . $mensagem ."\r\n"; 

		if(Mail($destino, $assunto, $mensagem, $cabecalho))
			$resposta = "Contato enviado com sucesso!";
		else
			$resposta = "Erro ao enviar o seu contato. Erro no servidor.";
	}
	else
	{
		$resposta = "Erro ao enviar o seu contato. Algum dado pode ter sido enviado incorretamente.";
	}
	
	header("Location:". caminhoArquivos("contato/".base64_encode($resposta)));

?>