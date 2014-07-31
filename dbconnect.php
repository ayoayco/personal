<?php

	$host="localhost"; // Host name 
	$username="ayoaycoc"; // Mysql username 
	$password="P455w0rd!"; // Mysql password 
	$db_name="ayoaycoc_ayoayco_db"; // Database name 

	// Connect to server and select databse.
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

?>

