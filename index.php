<?php

  session_start();

  if(isset($_POST['password'])){
  //echo "Hello!";
    @include("dbconnect.php");

    $password = md5($_POST['password']);

    $sql = "SELECT password FROM user";
    $result = mysql_query($sql) or die("Cannot execute query!");
    $row = mysql_fetch_array($result);

    if($password == $row['password']){
      session_start();
      $_SESSION['okay'] = 'okay';
      header('Location: ?id='.$_GET['id']);
    }else header('Location: ?id='.$_GET['id'].'&nope=nope');
  }

	if(isset($_GET['id'])){
    $page = $_GET['id'];
    switch($page){
      default: $title = "Home"; $page="home"; break;
      case "portfolio": $title = "Portfolio"; break;
      case "contact": $title = "Contact"; break;
      case "about": $title = "About"; break;
      case "changepw": $title = "Change Password"; if(!isset($_SESSION['okay'])) header("Location: ?id=home"); break;
      case "editurl": $title = "Edit URL"; if(!isset($_SESSION['okay'])) header("Location: ?id=home"); break;
      case "add": $title = "Add a Life Moment"; if(!isset($_SESSION['okay'])) header("Location: ?id=home"); break;
      case "edit": $title = "Edit a Life Moment"; if(!isset($_SESSION['okay'])) header("Location: ?id=home"); break;
      case "home": $title = "Home"; break;
    }
  }
  else{
    $page = "home";
    $title = "Home";
  }

  @require("header.php");

  switch($page){
    default: @require("home.php"); break;
    case "portfolio": @require("portfolio.php"); break;
    case "about": @require("about.php"); break;
    case "contact": @require("contact.php"); break;
    case "changepw": @require("changePassword.php"); break;
    case "editurl": @require("editurl.php"); break;
    case "add": @require("add.php"); break;
    case "edit": @require("edit.php"); break;
    case "home": @require("home.php"); break;
  }

  @require("footer.php");

?>