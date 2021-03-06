<?php
require '../../execute/auth.php';
include '../../inc/config.inc';

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title>Dashboard | TechDeira</title>
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.min.css" rel="stylesheet">
<link href="../assets/css/retina.min.css" rel="stylesheet">
<link
	href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
<!-- end: CSS -->


<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<script src="../assets/css/ie6-8.css"></script>
		
	<![endif]-->

<!-- start: Favicon and Touch Icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57"
	href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
<!-- end: Favicon and Touch Icons -->

</head>

<body>
	<!-- start: Header -->
	<header class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse"
				data-target=".sidebar-nav.nav-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>
			<a href="#" class="col-lg-2 col-sm-1 col-xs-12 logo_image"
				id="gopage-top"><span style="color: #0088CC;">TECH</span><span
				style="color: #E86537">DEIRA</span></a>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					</a></li>
					<?php 
						$userselect = mysql_query("SELECT * FROM users WHERE id = '".$_SESSION['USER_ID']."'");
						$userrow = mysql_fetch_array($userselect);

					?>
					<!-- start: User Dropdown -->
					<li class="dropdown"><a class="btn account dropdown-toggle"
						data-toggle="dropdown" href="index.html#">
							<div class="avatar">
								<img src="../assets/img/avatar.jpg" alt="Avatar">
							</div>
							<div class="user">
								<span class="hello">Welcome!</span> <span class="name"><?php echo $userrow['firstname'] . " " . $userrow['lastname']; ?></span>
							</div>
					</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title"></li>
							<li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="../../execute/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
						</ul></li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->

		</div>
	</header>
	<!-- end: Header -->

	<div class="container">
		<div class="row">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1">
				<div
					class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="active"><a href="#"><i class="fa fa-bar-chart-o"></i><span
								class="hidden-sm"> Dashboard</span></a></li>
						<li><a href="courses.php"><i class="fa fa-laptop"></i><span
								class="hidden-sm"> Courses</span></a></li>
						<li><a href="profile.php"><i class=" fa fa-user fa-lg"></i><span
								class="hidden-sm"> Profile</span></a></li>
					</ul>
				</div>
			</div>
		<div id="content" class="col-lg-10 col-sm-11"><h1>Welcome, <?php echo $_SESSION['FNAME']; ?>!</h1>
      <p>Using your dashboard you can add courses, workshops, lectures and modifiy your profile in TechDeira</p>
   </div>
   <!-- end: Content -->
    
    </div><!--/row-->
			</div>
			
		</div>
		
	</div>
	
	<!-- end: Main Menu -->


	<div class="clearfix"></div>
	<footer>
		<p>
			<span style="text-align: left; float: right">&copy; 2014
				<a target="_blank" href="http://technation.af">TechNation</a>. All rights reserved.
			</span> 
		</p>

	</footer>

	<!-- start: JavaScript-->
	<!--[if !IE]>-->

	<script src="../assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="../assets/js/jquery-1.10.2.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

	<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>




	<!-- page scripts -->
	<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="../assets/js/jquery.sparkline.min.js"></script>
	<script src="../assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../assets/js/excanvas.min.js"></script><![endif]-->
	<script src="../assets/js/jquery.flot.min.js"></script>
	<script src="../assets/js/jquery.flot.pie.min.js"></script>
	<script src="../assets/js/jquery.flot.stack.min.js"></script>
	<script src="../assets/js/jquery.flot.resize.min.js"></script>
	<script src="../assets/js/jquery.flot.time.min.js"></script>
	<script src="../assets/js/jquery.autosize.min.js"></script>
	<script src="../assets/js/jquery.placeholder.min.js"></script>

	<!-- theme scripts -->
	<script src="../assets/js/custom.min.js"></script>
	<script src="../assets/js/core.min.js"></script>

	<!-- inline scripts related to this page -->
	<script src="../assets/js/pages/index.js"></script>

	<!-- end: JavaScript-->

</body>
</html>