<?php
require_once ('inc/config.inc');

									// Connect to mysql server
									$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
									if (! $link) {
										die ( 'Failed to connect to server: ' . mysql_error () );
									}

									// Select database
									$db = mysql_select_db ( DB_DATABASE );
									if (! $db) {
										die ( "Unable to select database" );
									}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<title>TechDeira -- Comunity Technology</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META http-equiv="Content-type" content="text/html; charset=iso-8859-1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/prettify.css" rel="stylesheet">
<link href="assets/css/stylesheet.css" rel="stylesheet">
<link href="assets/icon/font-awesome.css" rel="stylesheet">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Le fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="assets/img/apple-touch-icon-144-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="assets/img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="assets/img/apple-touch-icon-72-precomposed.html">
<link rel="apple-touch-icon-precomposed"
	href="assets/img/apple-touch-icon-57-precomposed.html">
<link rel="shortcut icon" href="assets/img/favicon.png">
<style type="text/css">
.dis {
	pointer-events: none;
	cursor: default;
}
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script type="text/javascript" src="assets/js/html5shiv.js"></script>
    <![endif]-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
	<span id="page-top"></span>
	<header class="black"><nav>
	<ul class="header_actions pull-left hidden-phone">
		<li>
			<a class="#" href="#">Courses</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			<li><a class="gojava" href="#">Java Programming</a></li>
			<!-- <li><a class="goservices" href="#">Web Dev</a></li> -->
  			<li class="dropdown-submenu">
   	 			<a tabindex="-1" class="goweb" href="#">Web Development</a>

   				<ul class="dropdown-menu">
					<li><a class="goservices" href="#">Services1</a></li>
					<li><a class="goservices" href="#">Services1</a></li>
   			 	</ul>
  			</li>
		  <li class="dropdown-submenu">
				<a tabindex="-1" class="golinux" href="#">Linux System Administration</a>
				<ul class="dropdown-menu">

				<li><a class="goservices" href="#">Services1</a></li>
				<li><a class="goservices" href="#">Services2</a></li>
				</ul>
			</li>
			<li class="dropdown-submenu">
		    <a tabindex="-1" href="#">More options</a>
		    <ul class="dropdown-menu">
				<li><a class="goservices" href="#">Services</a></li>
				<li><a class="goservices" href="#">Services</a></li>
		    </ul>
		  </li>
</ul>
</li>
		<li><a class="goservices" href="#">Services</a></li>
		<li><a class="gogetinv" href="#">Get Involved</a></li>
		<li><a class="goabout" href="#">About</a></li>
		<li><a class="gomedia" href="#">Media</a></li>
		<li><a class="gogetcontact" href="#">Contact</a></li>
		<!-- <li><a class="gotraining" href="#">Training</a></li>
    	<li><a class="goevents" href="#">Events</a></li>
    	<li><a class="gomedia" href="#">Media</a></li>
    	<li><a class="gohalloffame" href="#">Hall of Fame</a></li> -->
	</ul></nav>
	<!-- Header start --> <a href="#" class="logo_image" id="gopage-top"><span
		style="color: #0088CC">TECH</span><span style="color: #E86537">DEIRA</span></a>
	<ul class="header_actions pull-right">
									<?php
									if (isset ( $_SESSION ['USER_ID'] )) {
									$id = $_SESSION ['USER_ID'];
									$qry = mysql_query ( "SELECT * FROM users WHERE id='" . $id . "'" );
									if ($qry) {
										$row = mysql_fetch_array ( $qry );
									} else {
										echo mysql_error ();
									}
									?>
        	<li class="dropdown"><a href="#"><img
				src="assets/demo/avatar_06.png" alt="User image" class="avatar"> <?php echo $_SESSION['FNAME']. " " . $_SESSION['LNAME']; ?> <i
				class="icon-angle-down"></i></a>
			<ul>
				<li><a href="users/<?php echo $row['role']; ?>/index.php"><i
						class="icon-home"></i> Home</a></li>
				<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
				<li><a href="#"><i class="icon-user"></i> Profile</a></li>
				<li class="divider"></li>
				<li><a href="execute/logout.php"><i class="icon-signout"></i> Logout</a></li>
			</ul></li>
		<!--<li><a class="goabout" href="#">About</a></li>
    		<li><a class="gogetcontact" href="#">Contact</a></li> -->
		<li><a href="execute/logout.php">&nbsp; <span class="hidden-phone">
					Logout </span>&nbsp; <i class="icon-signout"></i></a></li>
        <?php } else { ?>
    		<!--<li><a class="goabout" href="#">About</a></li>
    		<li><a class="gogetcontact" href="#">Contact</a></li>-->
		<li><a href="login/login.php"><i class="icon-signin"></i> <span
				class="hidden-768 hidden-480">Login</span></a></li>

        <?php } ?>
            <li class="responsive_menu"><a class="iconic" href="#"><i
				class="icon-reorder"></i></a>
			<ul
				style="position: absloute; left: -160px; width: 200px; padding: 0;">
				<li><a class="goabout" href="#">About</a></li>
				<li><a class="gogetinv" href="#">Get Involved</a></li>
				<li><a href="#">Courses</a></li>
				<li><a href="#">Lectures</a></li>
				<li><a class="gogetcontact" href="#">Get in Touch</a></li>
				<li><a href="goservices"> Services</a></li>
				<li><a href="#"> Membership</a></li>
				<li><a href="#"> Media</a></li>
				<li><a href="#"> Speakers Bureau</a></li>
			</ul></li>
	</ul>
	</header>
	<div class="container">
