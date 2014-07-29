<!DOCTYPE html>
<html lang="en">
  <head>
<!--facebook meta tags start-->
	  <meta content='281178735268020' property='fb:app_id'/>
	  <meta content='ayoJobhunter' property='fb:admins'/>

	  <meta content='https://lh3.googleusercontent.com/-9-trEGrUhDQ/Uw-uHdHQ-TI/AAAAAAAACzE/L-twPaeuI-s/w819-h460-no/fb-meta-image2.png' property='og:image'/>  
	  <meta expr:content='Ayo Ayco' property='og:site_name'/> 
	  <meta expr:content='http://ayoayco.com' property='og:url'/> 
	  <meta content='Ayo Ayco Personal Website :) Creator of Apps built for the Web!
I sleep a lot, too. Sometimes.' property='og:description'/>
	  <meta content='ayos-journal:blog' property='og:type'/>  
	  <meta expr:content='Ayo Ayco' property='og:title'/>       
<!--facebook meta tags end-->
	  
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	  <link href='http://blog.ayoayco.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <script async src="js/pace.min.js"></script>
    <link href="css/pace-barbershop.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <title><?php echo $title;?> | Ayo Ayco</title>

    <!-- timeline -->
    <link href="css/font-awesome.min.css" media="all" rel="stylesheet">
    <link href="css/style2.css" media="all" rel="stylesheet">
    <script async src="js/modernizr.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <script>
      $(document).ready(function(){
        $("#login-form").hide();
        $("#hide").click(function(){
          $("#login-form").hide(200);
          $("#login-link").show(500);
        });
        $("#login-link").click(function(){
          $("#login-form").show(500);
          $("#login-link").hide(200);
          $("#password").focus();
        });
      });
    </script>
	  
  </head>
  <body>
	  <?php
	  	include_once("analytics.php");
	  ?>
    <div id="wrap">
    <?php
        @require("navbar.php");
    ?>      
    <!--?php
    if(isset($_GET['id'])){
      $page = $_GET['id'];
      switch($page){
        default:;break;
        case "login": @require("navbar.php");;break;
        case "portfolio": @require("navbar.php");;break;
      }
    }
    ?-->