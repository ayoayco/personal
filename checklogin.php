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
	}else header('Location: ?id=home&nope=nope');

	echo "error";
?>