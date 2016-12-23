
<?php

$monthday = mysql_real_escape_string($_POST['month-day']);
$year = mysql_real_escape_string($_POST['year']);
$icon = mysql_real_escape_string($_POST['icon']);
$context = mysql_real_escape_string($_POST['context']);
$title = mysql_real_escape_string($_POST['title']);
$body = mysql_real_escape_string($_POST['body']);

if($monthday == ""){
    $monthday = "Sometime in";
}

@include('dbconnect.php');
$sql="INSERT INTO `timeline_post`(`month-day`, `year`, `icon`, `context`, `title`, `body`) VALUES ('".$monthday."', '".$year."', '".$icon."', '".$context."', '".$title."', '".$body."')";
$result = mysql_query($sql) or die ("Cannot add Life Moment!");

$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);

header("Location: ".$row['value']."?id=timeline");

?>