<?php

//echo "Hello!";
	@include("dbconnect.php");

	$password = md5($_POST['password']);

	$sql = "SELECT password FROM user";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($password == $row['password']){
		session_start();
		$_SESSION['okay'] = 'okay';
		header('Location: ?id=timeline');
	}else{
		$sql = "SELECT value FROM `options` WHERE `option` LIKE 'url'";
		$result = mysql_query($sql) or die("Cannot execute query!");
		$row = mysql_fetch_array($result);
		header('Location: '.$row['value']);
	}

	echo "error";
?>