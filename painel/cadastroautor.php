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


$autor          = $_POST['autorArtigos'];
$instituicao    = $_POST['instuicaoArtigos'];
$email          = $_POST['emailArtigos'];

for ($i = 0; $i < count($autor) ; $i++)
{

	$sql            = "INSERT INTO autor(nome, email, instituicao, status) VALUES('$autor[$i]', '$email[$i]', '$instituicao[$i]', 'Válido')";
	$resultado      = mysql_query($sql);

	$idAutor = mysql_insert_id();


	$sql            = "INSERT INTO autor_usuario(id_autor, id_usuario) VALUES('$idAutor', '$codigoUsuario')";
	$resultado      = mysql_query($sql);

}
mysql_close($conexao);
header("Location: painel.php");

?>
