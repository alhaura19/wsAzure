<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b5d3a2fe926939";
$password = "1ac57d24";
$database_name = "db_webapp";

$conn = mysql_connect($hostname, $username, $password)
	or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name)
	or die ("Error menghubungkan ke database");
?>