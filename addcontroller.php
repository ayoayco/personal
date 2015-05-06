
<?php

$monthday = $_POST['month-day'];
$year = $_POST['year'];
$icon = $_POST['icon'];
$context = $_POST['context'];
$title = $_POST['title'];
$body = $_POST['body'];

@include('dbconnect.php');
$sql="INSERT INTO `timeline_post`(`month-day`, `year`, `icon`, `context`, `title`, `body`) VALUES ('".$monthday."', '".$year."', '".$icon."', '".$context."', '".$title."', '".$body."')";
$result = mysql_query($sql) or die ("Cannot add Life Moment!");

$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);

header("Location: ".$row['value']."?id=timeline");

?>