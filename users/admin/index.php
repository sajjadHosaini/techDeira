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
	//Select active courses
	$active="SELECT * FROM `courses` WHERE status='active'";
	$actqry=mysql_query($active);
	$actrows=mysql_num_rows($actqry);
	
	//Select Deactive courses
	$deactive="SELECT * FROM `courses` WHERE status='deactive'";
	$deacqry=mysql_query($deactive);
	$deacrows=mysql_num_rows($deacqry);
	
	//Select Students
	$member="SELECT * FROM `users` WHERE role='member'";
	$memqry=mysql_query($member);
	$sturows=mysql_num_rows($memqry);
	
	//Select Teachers
	$instructor="SELECT * FROM `users` WHERE role='instructor'";
	$instqry=mysql_query($instructor);
	$teacrows=mysql_num_rows($instqry);
	
	//Select Materials courses
	$materials="SELECT * FROM `materials`";
	$matqry=mysql_query($materials);
	$matrows=mysql_num_rows($matqry);
	
	//Select Lectures courses
	$lectures="SELECT * FROM `lectures`";
	$lecqry=mysql_query($lectures);
	$lecrows=mysql_num_rows($lecqry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <script type="text/javascript" src="../assets/js/jquery.js"></script>
<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#activecourse').hide();
		$('#deactivecourse').hide();
		$('#students').hide();
		$('#teachers').hide();
		$('#materials').hide();
		$('#back').hide();
		$('#lectures').hide();
			$('#activelink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').show();
				$('#deactivecourse').hide();
				$('#students').hide();
				$('#teachers').hide();
				$('#materials').hide();
				$('#lectures').hide();
			});
			$('#deactivelink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').hide();
				$('#deactivecourse').show();
				$('#students').hide();
				$('#teachers').hide();
				$('#materials').hide();
				$('#lectures').hide();
			});
			$('#studentslink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').hide();
				$('#deactivecourse').hide();
				$('#students').show();
				$('#teachers').hide();
				$('#materials').hide();
				$('#lectures').hide();
			});
			$('#teacherslink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').hide();
				$('#deactivecourse').hide();
				$('#students').hide();
				$('#teachers').show();
				$('#materials').hide();
				$('#lectures').hide();
			});
				$('#materialslink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').hide();
				$('#deactivecourse').hide();
				$('#students').hide();
				$('#teachers').hide();
				$('#materials').show();
				$('#lectures').hide();
			});
			$('#lecturesLink').click(function(){
				$('#back').show();
				$('#leftside').hide();
				$('#rightside').hide();
				$('#activecourse').hide();
				$('#deactivecourse').hide();
				$('#students').hide();
				$('#teachers').hide();
				$('#materials').hide();
				$('#lectures').show();
			});
		});
		</script>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'TechDeira statistics'
        },
        tooltip: {
            pointFormat: '<b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: "<b>{point.name}</b>: {point.y}",
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
		
        series: [{
            type: 'pie',
            name: 'Result',
			point: {
				events:{
					click: function(e){
						location.href = e.point.url;
						e.preventDefault();
					}
				}
			},
		
            data: [
                ['Active Course', 
				<?php echo $actrows;?>
				],
                ['DeActive Courese', <?php echo $deacrows; ?>],
                ['students',   <?php echo $sturows; ?>],
                ['Materails',     <?php echo $matrows; ?>],
                ['Lectures',     <?php echo $lecrows; ?>],
                ['Teachers',   <?php echo $teacrows; ?>]
            ]
        }]
    });
});
		</script>
<!-- start: Meta -->
<meta charset="utf-8">
<title>Admin Dashboard </title>
<!-- end: Meta -->
<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->
<!-- start: CSS -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.min.css" rel="stylesheet">
<link href="../assets/css/retina.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
			<div id="sidebar-left" class="col-lg-12 col-sm-11">
				<div
					class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="active"><a href="#"><i class="fa fa-bar-chart-o"></i><span
								class="hidden-sm"> Dashboard</span></a></li>
						<li><a href="courses.php"><i class="fa fa-laptop"></i><span
								class="hidden-sm"> Courses</span></a></li>
					</ul>
				</div>
			</div>
			
		<div id="content" class="col-lg-12 col-sm-12"><h1>Welcome, <?php echo $_SESSION['FNAME']; ?>!</h1>
      <p>Using your dashboard you can add courses, workshops, lectures in TechDeira</p>
	  <a href="index.php" id="back"><b style="color:blue;"><i class="fa fa-arrow-left"></i> Back to home</b> </a>
	  <div class="col-md-offset-0.5">
	 	<div class="col-lg-6 col-sm-4" id="leftside">
		<table class="table table-hover table-bordered">
		<tr>
		<td><a id="activelink" class="btn btn-lg btn-success" href="#">
			<i class="fa fa-folder-open fa-1x pull-left"></i> Active Course</a></td>
		<td>
		<a class="btn btn-lg btn-danger" href="#" id="deactivelink">
			<i class="fa fa-question-circle fa-1x pull-left"></i> DeActive Course</a></td>
		</tr>
		<tr><td><a class="btn btn-lg btn-info" href="#" id="studentslink">
			<i class="fa fa-user fa-1x pull-left"></i> Students</a>
		  </td>
		<td><a class="btn btn-lg btn-info" href="#" id="teacherslink">
			<i class="fa fa-users fa-1x pull-left"></i>  Teachers</a>
		  </td> </tr>
		<tr><td> <a class="btn btn-lg btn-primary" href="#" id="materialslink" >
			<i class="fa fa-book fa-1x pull-left"></i>  Materails</a> 
			</td>
			<td> <a class="btn btn-lg btn-primary" href="#" id="lecturesLink" >
			<i class="fa fa-book fa-1x pull-left"></i>  Lectures</a> </td>
		</tr>
		</table>
		</div>
   	<div  class="col-lg-6 col-sm-8 " id="rightside">
	  <div class="" id="container" style="min-width: 500px; height: 465px; max-width: 465px;">
	</div>
   </div>
   </div>
   <div class="col-lg-10 col-sm-9" id="activecourse">
   <table class="table table-hover table-bordered">
      <tr> <td>Course title </td><td>Description </td><td>Fee </td><td>Date from </td><td>Date to </td><td>Time from </td><td>Time to </td><td>Category id </td><td> Instructor id</td><td> Status</td></tr>
   <?php
			while($fetchact=mysql_fetch_array($actqry)){
				echo "<tr><td>".$fetchact['course_title']."</td><td>".$fetchact['desc']."</td><td>".$fetchact['fee']."</td><td>".$fetchact['date_from'].
				"</td><td>".$fetchact['date_to']."</td><td>".$fetchact['time_from'].
				"</td><td>".$fetchact['time_to']."</td><td>".$fetchact['category_id'].
				"</td><td>".$fetchact['instructor_id']."</td><td>".$fetchact['status']."</td></tr>";
			}
   ?>   
   </table>
   </div>
     <div class="col-lg-10 col-sm-9" id="deactivecourse">
   <table class="table table-stripted table-bordered">
   <tr> <td>Course title </td><td>Description </td><td>Fee </td><td>Date from </td><td>Date to </td><td>Time from </td><td>Time to </td><td>Category id </td><td> Instructor id</td><td> Status</td></tr>
   <?php
			while($fetchdeact=mysql_fetch_array($deacqry)){
				echo "<tr><td>".$fetchdeact['course_title']."</td><td>".$fetchdeact['desc']."</td><td>".$fetchdeact['fee']."</td><td>".$fetchdeact['date_from'].
				"</td><td>".$fetchdeact['date_to']."</td><td>".$fetchdeact['time_from'].
				"</td><td>".$fetchdeact['time_to']."</td><td>".$fetchdeact['category_id'].
				"</td><td>".$fetchdeact['instructor_id']."</td><td>".$fetchdeact['status']."</td></tr>";
			}
   ?>   
   </table>
   </div>
      <div class="col-lg-10 col-sm-9" id="students">
   <table class="table table-hover table-bordered">
   <tr><td>First name </td><td>Last name </td><td>Email id </td><td>DOB </td><td>Role </td><td>Delete</td></tr>
   <?php
			while($fetchst=mysql_fetch_array($memqry)){
				echo "<tr><td>".$fetchst['firstname']."</td><td>".$fetchst['lastname']."</td><td>".$fetchst['email_id']."</td><td>".$fetchst['dob'].
				"</td><td>".$fetchst['role']."</td><td><a href='#' onclick='runDelMem(".$fetchst['id'].");'><i class='fa fa-times-circle btn-error'></i></a></td></tr>";
			}
   ?>   
   </table>
   </div>
   <div class="col-lg-10 col-sm-9" id="materials">
   <table class="table table-bordered">
   <tr><td>Material Title </td><td>Description </td><td>Course Name</td><td>Download </td></tr>
   <?php
			while($fetchmat=mysql_fetch_array($matqry)){
				$select_coursemat = mysql_query ( "SELECT * FROM courses where id='" . $fetchmat ['course_id'] . "'" );
				$coursematrows = mysql_fetch_array ( $select_coursemat );
				echo "<tr><td>".$fetchmat['material_title']."</td><td>".$fetchmat['desc']."</td><td>".$coursematrows['course_title']."</td><td><a href='../instructor/files/courses/".$fetchmat['file_name'].
				"' ><i class='fa fa-download'></i></a></td></tr>";
			}
   ?>   
   </table>
   </div>
    <div class="col-lg-10 col-sm-9" id="lectures">
   <table class="table table-bordered">
   <tr><td>Lecture Title </td><td>Description </td><td>Date</td><td>Course Name</td><td>Image </td></tr>
   <?php
			while($fetchlec=mysql_fetch_array($lecqry)){
				$select_courselec = mysql_query ( "SELECT * FROM courses where id='" . $fetchlec ['course_id'] . "'" );
				$courselecrows = mysql_fetch_array ( $select_courselec );
				echo "<tr><td>".$fetchlec['lecture_title']."</td><td>".$fetchlec['lecture_desc']."</td><td>".$fetchlec['date']."</td><td>".$courselecrows['course_title']."</td><td><img src='../instructor/images/lectures/".$fetchlec['image'].
				"' /></td></tr>";
			}
   ?>   
   </table>
   </div>
   <div class="col-lg-10 col-sm-9" id="teachers">
   <table class="table table-hover table-bordered">
   <tr><td>First name </td><td>Last name </td><td>Email id </td><td>DOB </td><td>Role </td><td>Delete</td></tr>
   <?php
			while($fetchtech=mysql_fetch_array($instqry)){
				echo "<tr><td>".$fetchtech['firstname']."</td><td>".$fetchtech['lastname']."</td><td>".$fetchtech['email_id']."</td><td>".$fetchtech['dob'].
				"</td><td>".$fetchtech['role']."</td><td><a href='#' onclick='runDelTeach(".$fetchtech['id'].");'><i class='fa fa-times-circle'></i></a></td></tr>";
			}
   ?>   
   </table>
   </div>
    </div>
   <!-- end: Content -->
		</div>
	<!--/row-->
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
	<button id="deleteMemberSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Member Deleted Successfully","layout":"topCenter","type":"success"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<button id="deleteTeacherSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Instructor Deleted Successfully","layout":"topCenter","type":"success"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
			<!-- Start of Delete Teacher Modal -->
	<div class="modal fade" id="deleteTeacherModal" tabindex="-1"
		role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Delete Instructor</strong>
					</h1>
				</div>
				<div class="modal-body"
					style="padding: 0 0 0 20px; margin-top: -5px">
					<h3>Are you sure to delete this Instructor?</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name="submit"
						class="btn btn-danger acceptDeleteTeacher">Delete</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- End of Delete Teacher Modal -->
	<!-- Start of Delete Member Modal -->
	<div class="modal fade" id="deleteMemberModal" tabindex="-1"
		role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Delete Member</strong>
					</h1>
				</div>
				<div class="modal-body"
					style="padding: 0 0 0 20px; margin-top: -5px">
					<h3>Are you sure to delete this Member?</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name="submit"
						class="btn btn-danger acceptDeleteMember">Delete</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- End of Delete member Modal -->
	<!-- start: JavaScript-->
	<!--[if !IE]>-->
	<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>
			<script type="text/javascript">
					<!-- Deleting the teacher JQuery.ajax-->
		function runDelTeach(id) {
		$("#deleteTeacherModal").modal();
		$(".acceptDeleteTeacher").on("click", function() {
			$.ajax({
				type : "GET",
				url : "execute/deleteUser.php",
				data : "id=" + id,
				cache : false,
				success : function(html) {
						$("#deleteTeacherModal").modal('hide');
						$("#deleteTeacherSuccess").click();
					//	$(".ltr" + id).hide();
				}
			});
		});
	}
		function runDelMem(id) {
		$("#deleteMemberModal").modal();
		$(".acceptDeleteMember").on("click", function() {
			$.ajax({
				type : "GET",
				url : "execute/deleteUser.php",
				data : "id=" + id,
				cache : false,
				success : function(html) {
						$("#deleteMemberModal").modal('hide');
						$("#deleteMemberSuccess").click();
					//	$(".ltr" + id).hide();
				}
			});
		});
	}
			</script>
	<!--<![endif]-->
	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- page scripts -->
	<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="../assets/js/jquery.sparkline.min.js"></script>
	<script src="../assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]> -->
	<script language="javascript" type="text/javascript" src="../assets/js/excanvas.min.js"></script><!-- [endif] -->
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
	<script src="../assets/js/highcharts.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.noty.min.js"></script>
	<!--<script src="../assets/js/jquery1.8.2.min.js"></script>-->
    <script src="../assets/js/exporting.js"></script>
	<!-- end: JavaScript-->
</body>
</html>