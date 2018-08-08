<!DOCTYPE html>
<?php
 	error_reporting(0);

	include 'includes/conexao.php';
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Esqueci minha senha CIPEI</title>
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
			<h2> Esqueci minha senha </h2> 
			<br> <br>
			
			<p style="color: white;">
				<?php
					if(isset($_GET['m']))
						echo base64_decode($_GET['m']) . "<br> <br>";
				?>
			</p>
			
			<div class="login-form">
				<form action="esqueciminhasenhaacao.php" method="post">
					<label> Digite seu e-mail: </label> <br> <br>
					<input type="text" name="email" placeholder="Digite seu e-mail" required>
					<input type="submit" name="enviar" value="Enviar">
				</form>
			</div>
		</div>
	</div>
	</div>
  
  
</body>
</html>
