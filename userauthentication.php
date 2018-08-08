<?php
    error_reporting(0);
	
	$host = "108.167.188.28";
    $user = "lucke893_usercip";
    $pass = "cipei2017";
    $banco = "lucke893_cipei";
            
    $conexao = mysql_connect($host, $user, $pass) OR die (mysql_error());
    mysql_select_db($banco) or die (mysql_error());
        
        $usuario    = $_POST['usuario'];
        $senha      = $_POST['senha'];
        
        $sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' and senha ='$senha'");
        
        if(mysql_num_rows($sql) > 0)
        {
            $dados = mysql_fetch_assoc($sql);
            
            session_start();
            
            $_SESSION['usuario']        = $dados['usuario'];
            $_SESSION['nome_usuario']   = $dados['nome'];
            $_SESSION['id_usuario']     = $dados['id'];
            
            header("Location: painel/painel.php");
			exit();
			
        }   
            
		header("Location: login.php");
        
    ?>