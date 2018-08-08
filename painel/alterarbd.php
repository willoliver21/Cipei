<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(0);
include '../includes/conexao.php';

?>
<?php

session_start();

if (isset($_SESSION['usuario']))
{
  $codigoUsuario = $_SESSION['id_usuario'];

}
else
{
  header("Location: login.php");
}

$senha=$_POST['senha'];
$nome=$_POST['nome'];
$instituicao=$_POST['instituicao'];
$email=$_POST['email'];
$sql = mysql_query("UPDATE usuarios SET senha='{$senha}', nome='{$nome}', instituicao='{$instituicao}', email='{$email}' WHERE id='{$codigoUsuario}'");

mysql_close($conexao);
header("Location: perfil.php");
?>
