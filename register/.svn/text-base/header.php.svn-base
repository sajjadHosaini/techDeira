<?php 
session_start();
include('../inc/config.inc');
//Connect to mysql server
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
	die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db(DB_DATABASE);
if(!$db) {
	die("Unable to select database");
}
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8")
?>
<!DOCTYPE html>

<html lang="en">
  
<!-- Mirrored from leviatz.com/flatpoint/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 26 Jul 2013 20:06:20 GMT -->
<head>
    <meta charset="utf-8">
    <title>TechDeira -- Comunity Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/prettify.css" rel="stylesheet">
    <link href="../assets/css/stylesheet.css" rel="stylesheet">
    <link href="../assets/icon/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/img/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/apple-touch-icon-72-precomposed.html">
                    <link rel="apple-touch-icon-precomposed" href="../assets/img/apple-touch-icon-57-precomposed.html">
                                   <link rel="shortcut icon" href="../assets/img/favicon.png">
	<style type="text/css">
		.dis{
			pointer-events: none;
   			cursor: default;
		}	
	</style>
  	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="assets/js/html5shiv.js"></script>
    <![endif]-->
    
  </head>

  <body>
<span id="page-top"></span>
    <header class="black"> 
    <!-- Header start -->
        <a href="../index.php" class="logo_image_left"><span style="color:#0088CC">TECH</span><span style="color:#E86537">DEIRA</span></a>
        <ul class="header_actions">
            <li><a href="#"><i class="icon-signin"></i> <span class="hidden-768 hidden-480">Login</span></a></li>
           
        </ul>
    </header>
    <div class="container"> 