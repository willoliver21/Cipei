<!DOCTYPE html>

<?php
include '../includes/conexao.php';

if (isset($_SESSION['usuario']))
{
    $codigoUsuario = $_SESSION['id_usuario'];

}
else
{
  header("Location: login.php");
}

$dados = mysql_query($conexao, "SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
$row_dados = mysql_fetch_assoc($dados);
?>


<html>
  <head>
    <title>Alterar Dados</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- ICONE -->
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>

	<!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../css/stylesp.css" rel="stylesheet">
    <script src="../js/script.js"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="../index.php">CIPEI</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12"></div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                        <?php
                            echo $row_dados['usuario'];
                          ?>
                          <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="../logout.php">Sair</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Menu -->
                    <li><a href="painel.php"><i class="glyphicon glyphicon-home"></i> Principal</a></li>
                    <li><a href="perfil.php"><i class="glyphicon glyphicon-pencil"></i> Meus Dados</a></li>
                    <li class="current"><a href="autor.php"><i class="glyphicon glyphicon-user"></i> Cadastro de Autores</a></li>
                    <li><a href="arquivos.php"><i class="glyphicon glyphicon-link"></i> Submissões</a></li>
                    <li><a href="novasub.php"><i class="glyphicon glyphicon-link"></i> Novas Submissões</a></li>
                    <li><a href="../index.php"><i class="glyphicon glyphicon-arrow-left"></i> Voltar para CIPEI</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading tirar-padding">
							<div class="panel-title"><h1>Cadastrar Autores
							</h1></div>
						</div>


		<div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive">

			           <table class="table table-condensed table-hover" data-wow-delay=".5s"> <!--tentei mudar várias linhas do bootstrap.css, por exemplo: linha 2273 do bootstrap.css "color: #3d9a97" e a linha 2286 "text-align: center;" nada acontece-->
			               <thead>
			                   <tr class="titulotable">
			                       <th>Nome do Autor</th>
			                       <th>Instituição</th>
			                       <th>E-mail</th>
			                   </tr>
			               </thead>
			               </table>
			               <form class="form-horizontal" nome="cadastroautor" action="cadastroautor.php" method="POST" onsubmit="return ValidaForm()">
			               <div id="origemArtigos">
			               <table class="table table-condensed table-hover">
			               <tbody>
			                       <td>
			                       		<input class="form-control" type="text" value="" name="autorArtigos[]" size="30" maxlenght="30" placeholder="Nome do Autor" id="txtAutor" required="" />
                                   </td>
			                       <td>
			                            <input class="form-control" type="text" value="" name="instuicaoArtigos[]" size="30" maxlenght="30" placeholder="Instituição do Autor" required=""/>
			                       </td>
			                       <td>
			                       		<input class="form-control" class="email" value="" type="text" placeholder="Email" onblur="validacaoEmailInsc(cadastroautor.emailArtigos[])" required="" size="30" name="emailArtigos[]" id="mail"/>
			                       </td>
			                       <td>
			                       	<button type="button" onclick="duplicarCamposArtigos();" id="btnMais" class="btn btn-color btn-perso"><i class="glyphicon glyphicon-plus"></i></button>
					   				<button type="button" onclick="removerCamposArtigos(this);"id="btnMenos" class="btn btn-color btn-perso"><i class="glyphicon glyphicon-minus"></i></button>
			                       </td>

			               </tbody>


			           </table>
			           </div>
			           <div ="row">
					    	 <div id="destinoArtigos"></div>
					    	 </div>
			           <input class="btn btn-perso col-md-2 col-md-offset-5" type="submit" value="Cadastrar">
			               </form>





			           </div> <!--table responsive-->
        </div>

    	</div>

    	</br>






		  			<!--	<div class="panel-body">
		  				    <div class="col-md-4"></div>
		  					<div class="col-md-4">
		  					<form class="form-horizontal" action="cadastroautor.php" method="POST">
											<div id="origemArtigos">
											<div class="row">
											<input type="text" value="Nome do Autor" name="autorArtigos[]" size="30" maxlenght="30" placeholder="Nome do Autor" id="txtAutor" required="" />
											</div>
											<div class="row">
											<input type="text" value="Instituição" name="instuicaoArtigos[]" size="30" maxlenght="30" placeholder="Instituição do Autor" required=""/>
											</div>
											<div class="row">
											<input class="email" value="Email" type="text" placeholder="Email" required="" name="emailArtigos[]" id="mail">
											</div>
											</br>
											<div class="row">
											<button type="button" onclick="duplicarCamposArtigos();" id="btnMais" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button>
											<button type="button" onclick="removerCamposArtigos(this);"id="btnMenos" class="btn btn-primary"><i class="glyphicon glyphicon-minus"></i></button>
											</div>
											</div>
											</br>

											 </br>

		  					    <input type="submit" value="Cadastrar">
		  					</form>
		  					</br>

		  					</div>
		  					<div class="col-md-4"></div>
		  				</div>-->

		  			</div>
		  		</div>

		  	</div>


    <footer>
         <div class="container">

            <div class="copy text-center">
               &copy; Copyright Congresso Interdisciplinar em Pesquisa, Empreendedorismo e Inovação | 2017  <b>by</b> Wilson Oliver, Matias Uchôa & Douglas Toledo (IFMS-Três Lagoas) <a href='../index.php'>CIPEI</a>
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>
