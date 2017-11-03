<?php

$newurl =  $_POST['newurl'];


@include('dbconnect.php');
$sql='UPDATE `options` SET `value` = "'.$newurl.'" WHERE `option` = "url"';

echo $sql;

$result = mysql_query($sql) or die ("Cannot edit URL!");

$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);

header("Location: ".$row['value']."?id=home");

?>