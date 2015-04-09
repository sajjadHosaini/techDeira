<?php
error_reporting(~E_ALL & ~E_NOTICE);
require '../../execute/auth.php';
include '../../inc/config.inc';
$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
$db = mysql_select_db ( DB_DATABASE );
if(!isset($_SESSION['profile']) || $_SESSION['profile'] != $_GET['id']) {
		session_destroy();
		header("location:../../login/login.php#login");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="jquery.js"></script>
<!-- start: Meta -->
<meta charset="utf-8">
<title>Dashboard | TechDeira</title>
<!-- end: Meta -->
<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->
<!-- start: CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/css/bootstrap.min.css">
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.min.css" rel="stylesheet">
<link href="../assets/css/jquery.timepicker.css" rel="stylesheet">
<link href="../assets/css/retina.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- end: CSS -->
<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
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
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.timepicker.css">
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
			<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i>
			</a> <a href="#" class="col-lg-2 col-sm-1 col-xs-12 logo_image"
				id="gopage-top"><span style="color: #0088CC;">TECH</span><span
				style="color: #E86537">DEIRA</span> </a>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					</a>
					</li>
					<?php
					$userselect = mysql_query ( "SELECT * FROM users WHERE id = '" . $_SESSION ['USER_ID'] . "'" );
					$userrow = mysql_fetch_array ( $userselect );
					?>
					<!-- start: User Dropdown -->
					<li class="dropdown"><a class="btn account dropdown-toggle"
						data-toggle="dropdown" href="index.html#">
							<div class="avatar">
								<img src="../assets/img/avatar.jpg" alt="Avatar">
							</div>
							<div class="user">
	                  <span class="hello">Welcome!</span> <span class="name">
	                  <?php echo $userrow['firstname'] . " " . $userrow['lastname']; ?>
								</span>
							</div> </a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title"></li>
							<li><a href="profile.php"><i class="fa fa-user"></i> Profile</a>
							</li>
							<li><a href="../../execute/logout.php"><i class="fa fa-sign-out"></i>
									Logout</a></li>
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
						<li><a href="index.php"><i class="fa fa-bar-chart-o"></i><span
								class="hidden-sm"> Dashboard</span> </a></li>
						<li><a href="courses.php"><i class="fa fa-laptop"></i><span
								class="hidden-sm"> Courses</span> </a></li>
						<li><a href="profile.php"><i class=" fa fa-user fa-lg"></i><span
								class="hidden-sm"> Profile</span> </a></li>
						<li>
					</ul>
				</div>
			</div>
			<div id="content" class="col-lg-10 col-sm-11">
				<h1>View Profile</h1>
				<hr>
				<div class="row" style="margin-left: 0;">
					<div class="col-md-3 well">
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#">Personal Info<span
									class='pull-right fa fa-chevron-right' style="margin-top: 4px;"></span>
							</a></li>
						</ul></div>
						<?php
$selectuser = mysql_query ( "SELECT * FROM users WHERE id = '" . $_SESSION ['USER_ID'] . "'");
$rowuser=mysql_fetch_array($selectuser);
$sql=mysql_query("select * from participants where id=" . $_GET['id'] . "");

?>
					<div class="col-md-9 well" style="margin-left: 10px; width: 73%;">
						<div class="step-pane" id="step3">
            <!--  Place of form  -->
			
		<table class="table">
		<?php while($row=mysql_fetch_array($sql)) {
		echo "<tr><td><b>Personal Info:</b></td><td></td></tr>";
		echo "<tr><td>Name:</td><td>".$row['firstname']."</td></tr>";
		echo "<tr><td>Surname:</td><td>".$row['surname']."</td></tr>";
		echo "<tr><td>Marital status:</td><td>".$row['status']."</td></tr>";
		echo "<tr><td>Date of Birth:</td><td>".$row['dob']."</td></tr>";
		echo "<tr><td>Phone_cell:</td><td>".$row['phone_cell']."</td></tr>";
		echo "<tr><td>Phone_line:</td><td>".$row['phone_line']."</td></tr>";
		echo "<tr><td>Emailadd:</td><td>".$row['emailadd']."</td></tr>"; 
		echo "<tr><td>Extraemail:</td><td>".$row['extraemail']."</td></tr>";
		echo "<tr><td>City:</td><td>".$row['city']."</td></tr>";
		echo "<tr><td>Zip:</td><td>".$row['zip']."</td></tr>";
		echo "<tr><td>Countryname:</td><td>".$row['countryname']."</td></tr>";
		echo "<tr><td>Province:</td><td>".$row['province']."</td></tr>";
		echo "<tr><td><b>Social Networking:</b></td><td></td></tr>";
		echo "<tr><td>Facebook:</td><td>".$row['facebook']."</td></tr>";
		echo "<tr><td>Twitter:</td><td>".$row['twitter']."</td></tr>";
		echo "<tr><td>Googleplus:</td><td>".$row['googleplus']."</td></tr>";
		echo "<tr><td>Linkedin:</td><td>".$row['linkedin']."</td></tr>";
		echo "<tr><td>Blog:</td><td>".$row['blog']."</td></tr>";
		echo "<tr><td>Skype:</td><td>".$row['skype']."</td></tr>";
		echo "<tr><td><b>Organizational Affilliation:</b></td><td></td></tr>";
		echo "<tr><td>ACSA-ICT Professionals Association:</td><td>".$row['pm_ACSA']."</td></tr>";
		echo "<tr><td>Open Source Afghanistan::</td><td>".$row['pm_OSA']."</td></tr>";
		echo "<tr><td>Org_title:</td><td>".$row['org_title']."</td></tr>";
		echo "<tr><td>Org_nature:</td><td>".$row['org_nature']."</td></tr>";
		echo "<tr><td>Org super name:</td><td>".$row['org_super_name']."</td></tr>";
		echo "<tr><td>Org surname phone:</td><td>".$row['org_super_phone']."</td></tr>";
		echo "<tr><td>Org super email:</td><td>".$row['org_super_email']."</td></tr>";
		echo "<tr><td>Org city:</td><td>".$row['org_city']."</td></tr>";
		echo "<tr><td>Org zip:</td><td>".$row['org_zip']."</td></tr>";
		echo "<tr><td>Org country:</td><td>".$row['org_countryid']."</td></tr>";
		echo "<tr><td>Org province:</td><td>".$row['org_province']."</td></tr>";
		echo "<tr><td>CS_Member:</td><td>".$row['CS_Member']."</td></tr>";
		echo "<tr><td>OpenSourceMember:</td><td>".$row['OpenSourceMember']."</td></tr>";
		echo "<tr><td>TechWomenMember:</td><td>".$row['TechWomenMember']."</td></tr>";
		echo "<tr><td>Pro member other name:</td><td>".$row['pro_member_other_name']."</td></tr>";
		echo "<tr><td>Pro member other email:</td><td>".$row['pro_member_other_email']."</td></tr>";
		echo "<tr><td>Position:</td><td>".$row['positions']."</td></tr>";
		echo "<tr><td><b>Educational Information:</b></td><td></td></tr>";
		echo "<tr><td>College/university,country:</td><td>".$row['college_university']."</td></tr>";
		echo "<tr><td>Faculty/Concentration:</td><td>".$row['faculty_concern']."</td></tr>";
		echo "<tr><td>Degree awarded/working toward:</td><td>".$row['degree_award']."</td></tr>";
		echo "<tr><td>Number of semesters completed:</td><td>".$row['number_semester']."</td></tr>";
		echo "<tr><td>Graduation date/anticipated date:</td><td>".$row['graduation_date']."</td></tr>";
		echo "<tr><td>Number of credit hours completed:</td><td>".$row['number_credit']."</td></tr>";
		echo "<tr><td>Grade Point Average:</td><td>".$row['grade_point']."</td></tr>";
		echo "<tr><td>List your achievements in academic area:</td><td>".$row['list_achievements']."</td></tr>";
		echo "<tr><td>Certification:</td><td>".$row['certification']."</td></tr>";
		echo "<tr><td>Knowledge plan:</td><td>".$row['knowledge_plan']."</td></tr>";
		echo "<tr><td><b>Work Experience with national:</b></td><td></td></tr>";
		echo "<tr><td>Work experience:</td><td>".$row['work_experience_national']."</td></tr>";
		echo "<tr><td><b>Skills:</b></td><td></td></tr>";
		echo "<tr><td>It/ICT Skills:</td><td>".$row['itskills']."</td></tr>";		
			}
			?>
			
			</table>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end: Main Menu -->
		<div class="clearfix"></div>
		<footer>
			<p>
				<span style="text-align: left; float: right">&copy; 2014 <a
					target="_blank" href="http://techdeira.af">Techdeira</a>. All
					rights reserved. </span>
			</p>
		</footer>
		<!-- start: JavaScript-->
		<!--[if !IE]>-->
		<!-- start: JavaScript-->
		<!--[if !IE]>-->
		<script src="../assets/js/jquery-2.0.3.min.js"></script>
		<!--<![endif]-->
		<!--[if IE]>
		<script src="assets/js/jquery-1.10.2.min.js"></script>
	<![endif]-->
		<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>
		<!--<![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
	<![endif]-->
		<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
		<!-- page scripts -->
		<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="../assets/js/jquery.timepicker.js"></script>
		<script src="../assets/js/myscript.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.noty.min.js"></script>
		<!-- theme scripts -->
		<script src="../assets/js/custom.min.js"></script>
		<script src="../assets/js/core.min.js"></script>
		<script type="text/javascript">
		$(function(){
			<?php if(isset($_GET['addCourse']) && $_GET['addCourse']=="success") { ?>
				$("#addCourseSuccess").click();
			<?php
			} else {
				echo "HELLO";
			}
			?>
		});
	
	</script>
		<script type="text/javascript" src="../assets/js/holder.js"></script>
</body>
</html>