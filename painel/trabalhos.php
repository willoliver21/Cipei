<?php
error_reporting(0);
include '../includes/conexao.php';


if (isset($_SESSION['usuario']))
{
	$codigoUsuario = $_SESSION['id_usuario'];

}
else
{
	header("Location: login.php");
}

$dados = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = ".$codigoUsuario);
$row_dados = mysqli_fetch_assoc($dados);

$autorcheck       = $_POST['autorcheck'];

//$autor          = $_POST['autorArtigos'];
//$instituicao    = $_POST['instuicaoArtigos'];
//$email          = $_POST['emailArtigos'];


$titulo         = addslashes(trim($_POST['tituloArtigos']));
$resumo         = addslashes(trim($_POST['resumoArtigos']));
$chaves         = addslashes(trim($_POST['chavesArtigos']));

$linhaPesquisa = $_POST['linhaPesquisa'];



$sql            = "INSERT INTO trabalho(titulo, resumo, palavrachave, status, tipo) VALUES('$titulo', '$resumo', '$chaves', 'Válido','Artigo')";
$resultado      = mysqli_query($conexao, $sql);

$idTrabalho = mysqli_insert_id($conexao);


//for ($i = 0; $i < count($autor) ; $i++)
//{
//  $sql            = "INSERT INTO autor(id, nome, email, instituicao, status) VALUES('$codigoUsuario', '$autor[$i]', '$email[$i]', '$instituicao[$i]', 'Válido')";
//$resultado      = mysql_query($sql);
//
//$sql            = "INSERT INTO autor_trabalho(id_autor, id_trabalho) VALUES($codigoUsuario, $idTrabalho)";
//$resultado      = mysql_query($sql);

//}

foreach ($autorcheck as $value)
{
	$sql            = "INSERT INTO autor_trabalho(id_autor, id_trabalho) VALUES('$value', '$idTrabalho')";
	$resultado      = mysqli_query($conexao, $sql);
	echo $value;
	exit;
}


foreach ($linhaPesquisa as $value)
{
	$sql            = "INSERT INTO artigo_linhaPesquisa(id_artigo, id_linhaPesquisa) VALUES($idTrabalho, $value)";
	$resultado      = mysqli_query($conexao, $sql);

}

// Envio dos Arquivos

// Tamanho máximo (em bytes)
$tamanhoPermitido = 15360000; // 15000k * 1024
$nome = $_POST['nome'];
// O nome original do arquivo no computador do usuário
$arqName = $idTrabalho.".pdf";
// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
$arqType = $_FILES['arquivo']['type'];
// O tamanho, em bytes, do arquivo
$arqSize = $_FILES['arquivo']['size'];
// O nome temporário do arquivo, como foi guardado no servidor
$arqTemp = $_FILES['arquivo']['tmp_name'];
// O código de erro associado a este upload de arquivo
$arqError = $_FILES['arquivo']['error'];
if ($arqError == 0) {
	// Verifica o tamanho do arquivo enviado
	if ($arqSize > $tamanhoPermitido) {
		echo 'O tamanho do arquivo enviado é maior que o limite!';
		// Não houveram erros, move o arquivo
	} else {
		$pasta = '../uploads/';
		$upload = move_uploaded_file($arqTemp, $pasta.$arqName);
	}
}

// Email para o "submissao.cipei@gmail.com"

//pego os dados enviados pelo formulario
$nome = "Artigo";
$email = "submissao.cipei@gmail.com";
$mensagem = $_POST["mensagem"];
$assunto = $_POST["assunto"];
$email_from = $idTrabalho;

//formato o campo da mensagem
$mensagem = wordwrap( $mensagem, 50, "", 1);

$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

if(file_exists($arquivo["tmp_name"]) and !empty($arquivo))
{

	$anexo = chunk_split($anexo);

	$boundary = "XYZ-" . date("dmYis") . "-ZYX";

	$mens = "--$boundary\n";
	$mens .= "Content-Transfer-Encoding: 8bits\n";
	$mens .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
	$mens .= "$mensagem\n";
	$mens .= "--$boundary\n";
	$mens .= "Content-Type: ".$arquivo["type"]."\n";
	$mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
	$mens .= "Content-Transfer-Encoding: base64\n\n";
	$mens .= "$anexo\n";
	$mens .= "--$boundary--\r\n";

	$headers = "MIME-Version: 1.0\n";
	$headers .= "From: \"$nome\" <$email_from>\r\n";
	$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$headers .= "$boundary\n";

	//envio o email com o anexo
	mail($email,$assunto,$mens,$headers);
}

mysqli_close($conexao);

header("Location: painel.php");
exit();
?>
