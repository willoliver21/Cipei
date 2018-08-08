<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_DB = "localhost";
$database_DB = "cipei_ifms";
$username_DB = "root";
$password_DB = "";
$DB = mysql_connect($hostname_DB, $username_DB, $password_DB) or trigger_error(mysql_error(),E_USER_ERROR);
?>

<!-- $hostname_DB = "cipei_ifms.mysql.dbaas.com.br";
$database_DB = "cipei_ifms";
$username_DB = "cipei_ifms";
$password_DB = "cipei2016";
$DB = mysql_connect($hostname_DB, $username_DB, $password_DB) or trigger_error(mysql_error(),E_USER_ERROR);
?> -->
