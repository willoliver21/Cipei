<!DOCTYPE html>
<?php
 	error_reporting(0);

	include 'includes/conexao.php';
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login CIPEI</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- ICONE -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
   
   <!--bootstrap-->
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
  <link rel='stylesheet prefetch' href='//fonts.googleapis.com/css?family=Open+Sans:600'>

 <link rel="stylesheet" href="css/style.css">
 

  
</head>

	<body class="total">
	<div class="buttonreturn">
		<a href="index.php" > <img src="images/logo.png" alt="Ir para a página principal" title="Ir para a página principal"> </a>					
	</div>
	  <div class="login-wrap">
		<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Entrar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrar</label>
		<div class="login-form">
			<form name="loginform" method="post" action="userauthentication.php">
			<div class="sign-in-htm">
				<div class="group">
					<label for="usuario" class="label">Usuário</label>
					<input id="usuario" type="text" class="input" name=usuario required="">
				</div>
				<div class="group">
					<label for="senha" class="label">Senha</label>
					<input id="senha" type="password" class="input" data-type="password" name="senha" required="">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Mantenha-me conectado</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Logar">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="esqueciminhasenha.php">Esqueci minha senha!</a>
				</div>
			</div>
			</form>
			<form name="signup" method="post" action="cadastro.php">
			<div class="sign-up-htm">
				<div class="group">
					<label for="usuario" class="label">Usuario</label>
					<input id="usuario" type="text" class="input" name="usuario" required="">
				</div>
				<div class="group">
					<label for="senha" class="label">Senha</label>
					<input id="senha" type="password" class="input" data-type="password" name="senha" required="">
				</div>
				<div class="group">
					<label for="senha" class="label">Repita Senha</label>
					<input id="senha" type="password" class="input" data-type="password" required="">
				</div>
				<div class="group">
					<label for="name" class="label">Nome Completo</label>
					<input id="name" type="text" class="input" name="name" required="">
				</div>
				<div class="group">
					<label for="instituicao" class="label">Instituição</label>
					<input id="instituicao" type="text" class="input" name="instituicao" required="">
				</div>
				<div class="group">
					<label for="mail" class="label">Endereço de Email</label>
					<input id="mail" type="text" class="input" name="mail" required="">
				</div>
				<table required=""> 
                     	<tr>
                     		<td> <p><label for="prof">Professor</label></p> </td>
                     		<td> <input type="radio" name="ident" id="prof" value="1"> </td>
                     	</tr>
                     	<tr>
                     		<td> <p><label for="aluno">Aluno</label></p> </td>
                     		<td> <input type="radio" name="ident" id="aluno" value="2" checked> </td>
                     	</tr>
                     	<tr>
                     		<td> <p><label for="outro">Outro</label></p> </td>
                     		<td><input type="radio" name="ident" id="outro" value="3"> </td>
                     	</tr>	
                    </table>
                    </br>
				<div class="group">
					<input type="submit" class="button" value="Registrar">
					</br>
					</br>
				</div>
				<div class="foot-lnk">
					<label for="tab-1">Já possui login?</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
  
  
</body>
</html>
