
<?php

$monthday = mysql_real_escape_string($_POST['month-day']);
$year = mysql_real_escape_string($_POST['year']);
$icon = mysql_real_escape_string($_POST['icon']);
$context = mysql_real_escape_string($_POST['context']);
$title = mysql_real_escape_string($_POST['title']);
$body = mysql_real_escape_string($_POST['body']);

$projID = $_GET['projID'];

if($monthday == ""){
    $monthday = "Sometime in";
}

//echo $projID;

@include('dbconnect.php');
$sql="UPDATE `timeline_post` SET `month-day` = '".$monthday."', `year` = '".$year."', `icon`= '".$icon."', `context` = '".$context."', `title` = '".$title."', `body` = '".$body."' WHERE `id` = '".$projID."'";
echo $sql."<br />";

$result = mysql_query($sql) or die ("Cannot edit Life Moment!");

$sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
$result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
$row = mysql_fetch_array($result2);

header("Location: ".$row['value']."?id=home");

?>