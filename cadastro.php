<?php
error_reporting(1);

include 'includes/conexao.php';

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$name=$_POST['name'];
$instituicao=$_POST['instituicao'];
$mail=$_POST['mail'];
$ident=$_POST['ident'];

$sql = mysql_query("INSERT INTO usuarios(usuario, senha, nome, instituicao, email, ident)
VALUES('$usuario', '$senha', '$name', '$instituicao', '$mail', '$ident')");



if($sql)
{
	$idUsuario = mysql_insert_id();

	session_start();

	$_SESSION['usuario']    = $usuario;
	$_SESSION['id_usuario'] = $idUsuario;

	$sql2 = mysql_query("INSERT INTO autor(nome, email, instituicao, status)
	VALUES('$name', '$mail', '$instituicao', 'valido')");

	if($sql2)
	{

		$idAutor = mysql_insert_id();

		mysql_query("INSERT INTO autor_usuario(id_autor, id_usuario)
		VALUES(".$idAutor.",".$idUsuario.")");
	}
	header("Location: painel/painel.php");
	exit();
}

mysql_close($conexao);

header("Location: index.php");
?>
