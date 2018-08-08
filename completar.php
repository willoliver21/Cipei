<?php
include 'includes/conexao.php';

$q=strtolower ($_GET["q"]);

$sql = "SELECT * FROM autor WHERE nome LIKE '%" . $q . "%'";
echo $sql;

$query = mysql_query($sql) or die ("Erro". mysql_query());

while($reg=mysql_fetch_array($query)){

	//if (srtpos(strtolower($reg['nom_lista']),$q !== false){
	echo $reg["nome"]."|".$reg["nome"]."\n";
	//	}
}
?>
