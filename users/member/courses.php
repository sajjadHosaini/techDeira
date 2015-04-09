<?php
require '../../execute/auth.php';
include '../../inc/config.inc';

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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/css/bootstrap.min.css">

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.min.css" rel="stylesheet">
<link href="../assets/css/jquery.timepicker.css" rel="stylesheet">
<link href="../assets/css/retina.min.css" rel="stylesheet">
<link
	href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
<!-- end: CSS -->

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

<link rel="stylesheet"
	href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css"
	href="../assets/css/jquery.timepicker.css">
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
					</a>
					</li>
					<?php
					$userselect = mysql_query ( "SELECT * FROM users WHERE id = '" . $_SESSION ['USER_ID'] . "'" );
					$userrow = mysql_fetch_array ( $userselect );
					
					?>
					<!-- start: User Dropdown -->
					<li class="dropdown"><a class="btn account dropdown-toggle"
						data-toggle="dropdown" href="courses.php#">
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
								class="hidden-sm"> Dashboard</span></a></li>
						<li class="active"><a href="#"><i class="fa fa-laptop"></i><span
								class="hidden-sm"> Courses</span></a></li>
						<li><a href="profile.php"><i class=" fa fa-user fa-lg"></i><span
								class="hidden-sm"> Profile</span></a></li>
					</ul>
				</div>
			</div>
			<div id="content" class="col-lg-10 col-sm-11">
				<h1>Courses</h1>
				<span class="pull-right"><button class="btn btn-large" onclick="showDataCourse()"
						data-toggle="modal" data-target="#joinCourseModal">
						<i class="fa fa-plus-circle"></i> &nbsp; Join a Course
					</button></span><br> <br>
				<div class="box">
					<div class="box-header">
						<h2>
							<i class="fa fa-laptop"></i>Your Courses
						</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i
								class="fa fa-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php if(!isset($_GET['id'])){ ?>
						<div id="courseList">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Course Title</th>
										<th>Category</th>
										<th>Description</th>
										<th>Fee</th>
										<th>Date from</th>
										<th>Date to</th>
										<th>Time from</th>
										<th>Time to</th>
										<th>Instructor</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$count = 1;
									$joinCourse = mysql_query ("SELECT * FROM join_course WHERE user_id = '". $_SESSION ['USER_ID'] ."'");
									while ($courserow = mysql_fetch_array ($joinCourse)){
										$select_course = mysql_query ( "SELECT * FROM courses where id='" . $courserow ['course_id'] . "'" );
										$catrows = mysql_fetch_array ($select_course);
										$select_cat = mysql_query ( "SELECT * FROM course_categories where id='" . $catrows ['category_id'] . "'" );
										$category = mysql_fetch_array ($select_cat);
										$select_inst = mysql_query ( "SELECT * FROM users where id='" . $catrows ['instructor_id'] . "'" );
										$selectInst = mysql_fetch_array ($select_inst);
										?> 
										<tr class="tr<?php echo $courserow['id']; ?>">
										<td><?php echo $count; ?></td>
										<td><?php echo $catrows['course_title']; ?></td>
										<td><?php echo $category['name']; ?></td>
										<td><?php echo $catrows['desc']; ?></td>
										<td><?php echo $catrows['fee']; ?></td>
										<td><?php echo $catrows['date_from']; ?></td>
										<td><?php echo $catrows['date_to']; ?></td>
										<td><?php echo $catrows['time_from']; ?></td>
										<td><?php echo $catrows['time_to']; ?></td>		 <td><?php echo $selectInst['firstname']; ?></td>
										<td><a href="courses.php?id=<?php echo $catrows['id']; ?>"><i class="fa fa-eye"></i> View</a>  </td>
										</tr>
									<?php
										$count ++;
									}
									?>
								</tbody>
							</table>
						</div> 
						<?php } 
						else{ 
							?>
						<div id="courseDetails">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#info" data-toggle="tab">Info</a></li>
								<li><a href="#lectures" data-toggle="tab">Lectures</a></li>
								<li><a href="#materials" data-toggle="tab">Materials</a></li>
								<a href="courses.php" class="btn btn-primary pull-right"><span class="fa fa-arrow-left"></span>&nbsp;Go To Courses</a>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="info">
									<div class="row" style="padding-top: 15px; padding-left: 20px;">
										<div class="col-md-6">
											<?php 
												$selectCourseDetails = mysql_query("SELECT * FROM courses WHERE id = '".$_GET['id']."'");
												$rowCourseDetails= mysql_fetch_array($selectCourseDetails);
											?>
											<h1><?php echo $rowCourseDetails['course_title']; ?></h1>
											<p><?php echo $rowCourseDetails['desc']; ?></p>
											<p>
												<strong>Duration: </strong> <?php echo $rowCourseDetails['date_from']; ?> to <?php echo $rowCourseDetails['date_to']; ?>
											</p>
											<p>
												<strong>Course Fee: </strong> <?php echo $rowCourseDetails['fee']; ?>
											</p>
											<p>
												<strong>Time: </strong> <?php echo $rowCourseDetails['time_from']; ?> to <?php echo $rowCourseDetails['time_to']; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="lectures">
									<div class="row" style="padding: 20px;">
										<div class="col-md-6 well myWell">
											<h1>Current Lectures</h1>
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
														<th>Description</th>
														<th>Date</th>
														<th>Image</th>
													</tr>
												</thead>
												<tbody>
									<?php
									$count = 1;
									$lectureselect = mysql_query ( "SELECT * FROM lectures WHERE course_id = '" . $_GET['id'] . "' ORDER BY date desc" );
									while ( $lecturerow = mysql_fetch_array ( $lectureselect ) ) {
				
										?> 
        <tr class="ltr<?php echo $lecturerow['id']; ?>">
														<td><?php echo $count; ?></td>
														<td><?php echo $lecturerow['lecture_title']; ?></td>
														<td><?php echo $lecturerow['lecture_desc']; ?></td>
														<td><?php echo $lecturerow['date']; ?></td>
														<td><img height="100px"
															src="../instructor/images/lectures/<?php echo $lecturerow['image']; ?>"/></td>
													</tr>
        <?php
										$count ++;
									}
									?>
								</tbody>
											</table>
										</div>
										<!-- deleteLecture -->
									
									</div>
								</div>
								<div class="tab-pane" id="materials">
									<div class="row" style="padding: 20px;">
										<div class="col-md-6 well myWell">
											<h1>Materials</h1>
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
														<th>Description</th>
														<th>Download</th>
													</tr>
												</thead>
												<tbody>
									<?php
									$count = 1;
									$materialselect = mysql_query ( "SELECT * FROM materials WHERE course_id = '" . $_GET['id'] . "' ORDER BY material_title" );
									while ( $materialrow = mysql_fetch_array ( $materialselect ) ) {
										?> 
        <tr class="mtr<?php echo $materialrow['id']; ?>">
														<td><?php echo $count; ?></td>
														<td><?php echo $materialrow['material_title']; ?></td>
														<td><?php echo $materialrow['desc']; ?></td>
														<td><a
															href="../instructor/files/courses/
															<?php echo $materialrow['file_name']; ?>"><i
																class="fa fa-download"></i></a></td>
													</tr>
										<?php
										$count ++;
									}
									?>
								</tbody>
											</table>
										</div>
										<!-- deleted -->
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
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
				target="_blank" href="http://technation.af">TechNation</a>. All
				rights reserved.
			</span>
		</p>
	</footer>
	<!-- modal -->
	<button id="joinCourseSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Enrol Completed Successfully","layout":"topCenter","type":"success"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<!-- Join course modal -->
	<div class="modal fade" id="joinCourseModal" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Join New Course</strong>
					</h1>
				</div>
				<div class="showModalCourse">
						<!--	 /.Join course modal will show here -->
				</div>
			</div>
		<!--	 /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<!-- End of add course modal -->

	<script src="../assets/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.noty.min.js"></script>
	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<!-- page scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/js/bootstrap.min.js">
	</script>
	<!-- theme scripts -->
	<script src="../assets/js/custom.min.js"></script>
	<script src="../assets/js/core.min.js"></script>
	<script type="text/javascript">
	var handleData = function (data) {
		$('.showModalCourse').html(data);
	}
	function showDataCourse() {
		$.ajax({
			url : 'join_course.php',
			type: 'GET',
			success : handleData
		})
	}
	</script>
	<script type="text/javascript">
		$(function(){
			<?php if(isset($_GET['join']) && $_GET['join']=="success") { ?>
				$("#joinCourseSuccess").click();
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