<?php

$oldpw = md5($_POST['oldpw']);
$newpw = md5($_POST['newpw']);
$newpw2 = md5($_POST['newpw2']);

@include('dbconnect.php');
$sql = "SELECT password FROM user";
$result = mysql_query($sql) or die("Cannot select password.");
$row = mysql_fetch_array($result);

if($row['password'] == $oldpw){
    //echo "old password correct<br />new password is: ".$newpw;
    $sql2 = "UPDATE user SET password = '".$newpw."'";
    $result2 = mysql_query($sql2) or die("Cannot update password");
    
    $sql2 = "SELECT * FROM `options` WHERE `option` = 'url'";
    $result2 = mysql_query($sql2) or die ("Cannot retrieve url!");
    $row = mysql_fetch_array($result2);
    header("Location: ".$row['value']."?id=home");
}else{
    header('Location: .?id=home&wrongoldpw=wrongoldpw');
}

?>