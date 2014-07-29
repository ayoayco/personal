<?php


function database_connect() {
 
	$dbhost = "localhost";
	$dbuser = "ayoaycoc";
	$dbpass = "P455w0rd!";
	$dbname = "ayoaycoc_db";
	
	$db = mysql_connect($dbhost,$dbuser,$dbpass) or die("Database error");
	mysql_select_db($dbname, $db);
 
}
?>