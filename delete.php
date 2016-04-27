<?php

$id = $_GET['id'];

@include('dbconnect.php');
$sql = "DELETE FROM `timeline_post` WHERE `id` = ".$id;
$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);
if($request = mysql_query($sql))
	header("Location: ".$row['value']."?id=timeline");
else
	die("Cannot delete timeline post! (id: ".$id.")");


?>