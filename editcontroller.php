
<?php

$monthday = $_POST['month-day'];
$year = $_POST['year'];
$icon = $_POST['icon'];
$context = $_POST['context'];
$title = $_POST['title'];
$body = $_POST['body'];

$projID = $_GET['projID'];

if($monthday == ""){
    $monthday = "Sometime in";
}

//echo $projID;

@include('dbconnect.php');
$sql="UPDATE `timeline_post` SET `month-day` = \"".$monthday."\", `year` = \"".$year."\", `icon`= \"".$icon."\", `context` = \"".$context."\", `title` = \"".$title."\", `body` = \"".$body."\" WHERE `id` = \"".$projID."\"";
$sql = mysql_real_escape_string($sql);
echo $sql;

$result = mysql_query($sql) or die ("Cannot add Life Moment!");

$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$sql2 = mysql_real_escape_string($sql2);
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);

header("Location: ".$row['value']."?id=home");

?>