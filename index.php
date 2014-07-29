<?php
	if(isset($_GET['id'])){
    $page = $_GET['id'];
    switch($page){
      default: $title = "Home"; $page="home"; break;
      case "login": $title = "Log In"; break;
      case "portfolio": $title = "Portfolio"; break;
      case "contact": $title = "Contact"; break;
      case "admin": $title = "Admin"; break;
      case "about": $title = "About"; break;
      case "timeline": $title = "Timeline"; break;
      case "home": $title = "Home"; break;
    }
  }
  else{
    $page = "home";
    $title = "Home";
  }

  @require("header.php");
?>
<?php
  switch($page){
    default: @require("home.php"); break;
    case "login": @require("login.php"); break;
    case "portfolio": @require("portfolio.php"); break;
    case "about": @require("about.php"); break;
    case "contact": @require("contact.php"); break;
    case "admin": @require("admin.php"); break;
    case "timeline": @require("timeline.php"); break;
    case "home": @require("home.php"); break;
  }
?>
<?php
  @require("footer.php");
?>