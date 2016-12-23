<?php 
	session_start();
	session_destroy();
	// Jump to login page
	@include("dbconnect.php");
	$sql = "SELECT value FROM `options` WHERE `option` LIKE 'url'";
	$sql = mysql_real_escape_string($sql);
	$result = mysql_query($sql) or die("Cannot execute query!");
	$row = mysql_fetch_array($result);
	header('Location: '.$row['value']);
?>
