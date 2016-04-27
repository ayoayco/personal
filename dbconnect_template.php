<?php

	$host="hostname"; // Host name
	$username="username"; // Mysql username
	$password="password!"; // Mysql password
	$db_name="database name"; // Database name

	// Connect to server and select databse.
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

?>

