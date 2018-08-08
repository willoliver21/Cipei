<?php
    // $host = "108.167.188.28";
    // $user = "lucke893_usercip";
    // $pass = "cipei2017";
    // $banco = "lucke893_cipei";

    $host = "localhost";
    $banco = "cipei_ifms";
    $user = "root";
    $pass = "";

    $conexao = mysqli_connect($host, $user, $pass, $banco) OR die (mysqli_error());
    // mysqli_select_db($banco) or die (mysqli_error());

	session_start();

	if (isset($_SESSION['usuario']))
	{
	    $codigoUsuario = $_SESSION['id_usuario'];
	    $dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
		$row_dados = mysqli_fetch_assoc($dados);
	}
?>
