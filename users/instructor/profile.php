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
	<style type="text/css"> 
	label{
		color:#000000;
	}
</style>
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
				<h1>Edit Profile</h1>
				<hr>
				<div class="row" style="margin-left: 0;">
					<div class="col-md-3 well">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Personal Info<span
									class='pull-right fa fa-chevron-right' style="margin-top: 4px;"></span>
							</a></li>
							<li><a href="#" class="eduinfo">Educational Info<span
									class='pull-right fa fa-chevron-right' style="margin-top: 4px;"></span>
							</a></li>
						</ul></div>
						<?php
$selectuser = mysql_query ( "SELECT * FROM users WHERE id = '" . $_SESSION ['USER_ID'] . "'");
$rowuser=mysql_fetch_array($selectuser);
$sql=mysql_query("select * from trainee_abade where emailadd='" . $rowuser['email_id'] . "'");
$row=mysql_fetch_array($sql);
$usid=$row['id'];
$status = $row['status'];
?>
					<div class="col-md-9 well" style="margin-left: 10px; width: 73%;">
						<div class="step-pane" id="step3">
<form class="form-horizontal" method="post" action="profile_edit.php?id='<?php echo $usid; ?>'">
								<div class="form-group">
									<strong><p>Personal Information</p> </strong>
									<div>
										<br/><span class="col-md-12"> 
<label class="radio-inline">
 Single: <input type="radio" name="status"  value="Single"
 <?php 
if($status=='male'){
echo "checked";
}  ?>
 > 
<br/>
  Married:<input type="radio" name="status"  value="Married" <?php 
if($status=='Married'){
echo "checked";
} ?>
> 
</label>
</div>
<!-- Added By Ali Sajjad Hosaini -->

<?php
 $id = $row['id'];
 $surname  = $row['surname'];  
 $firstname  = $row['firstname']; 
 $dob = $row['dob'];         
 $status = $row['status']; 
 $phonecell = $row['phone_cell'];  
 $phoneline = $row['phone_line'];  
 $emailadd = $row['emailadd'];  
 $extraemail = $row['extraemail'];  
 $city = $row['city'];   
 $zip = $row['zip']; 
 $countryid = $row['countryname']; 
 $province = $row['province'];   
 $facebook = $row['facebook'];   
 $twitter = $row['twitter'];   
 $googleplus= $row['googleplus'];  
 $linkedin = $row['linkedin'];   
 $blog = $row['blog'];  
 $skype = $row['skype'];     
 $ot = $row['org_title'];   
 $org_nature = $row['org_nature'];  
 $osn = $row['org_super_name']; 
 $osp = $row['org_super_phone'];  
 $ose = $row['org_super_email'];  
 $oc = $row['org_city'];  
 $oz = $row['org_zip'];  
 $oci = $row['org_countryid'];   
 $op = $row['org_province'];   
 $cm = $row['CS_Member'];  
 $osm = $row['OpenSourceMember'];  
 $twm = $row['TechWomenMember'];  
 $pmon = $row['pro_member_other_name'];  
 $pmoe = $row['pro_member_other_email'];
 $positions = $row['positions'];  
 $itskills = $row['itskills'];  
 $wen = $row['work_experience_national'];  
 $kp = $row['knowledge_plan'];    
 $pm_ACSA = $row['pm_ACSA'];
 $pm_OSA = $row['pm_OSA'];
 $college_university = $row['college_university'];
 $faculty_concern= $row['faculty_concern'];
 $degree_award= $row['degree_award'];
 $number_semester= $row['number_semester'];
 $graduation_date= $row['graduation_date'];
 $number_credit=$row['number_credit'];
 $grade_point = $row['grade_point'];
 $list_achievements = $row['list_achievements'];
 $certification = $row['certification'];
 $idcount = mysql_query ("SELECT * FROM countries");
// To get countries name
$countname = mysql_query ( "SELECT countryname FROM countries ");
$rowcountname = mysql_fetch_array($countname);
$rcountname = $rowcountname['countryname'];
//End
?>									<!-- Added By Ali Sajjad Hosaini -->
									<div>
						            <label class="control-label" for="inputSuccess">First Name</label>
										<div class="controls row">
											<div class="col-sm-4">
<input type="text" value="<?php echo $firstname; ?>" name="firstname" class="form-control" />
											</div>
										</div>
									</div>
									</span>
								</div>
								<div class="form-group ">
			                	<label class="control-label" for="inputSuccess">Surname</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $surname; ?>" name="surname"/>

										</div>
								
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">DOB</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $dob; ?>" name="dob">
										</div>
										
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Phone Cell</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $phonecell; ?>" name="phone_cell"/>
										</div>
									
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Phone Number</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $phoneline; ?>" name="phone_line"/>
										</div>
									
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Country</label>
									<div class="controls row">
										<div class="col-sm-4">
<select class="form-control" name="countryname">
<?php 
echo "<option>".$countryid."</option>";
while($rowidcount = mysql_fetch_array($idcount)){
echo "<option>".$rowidcount['countryName'] ."</option>";
}
?>
</select>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Province</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $province; ?>" name="province">
										</div>
										
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">City</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $city; ?>" name="city">
										</div>
										
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Zip code</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $zip; ?>" name="zip">
										</div>
										
									</div>
								</div>
								<hr>
								<div class="form-group ">
									<strong><p>Social Networking</p> </strong> <label
										class="control-label" for="inputSuccess">Facebook</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $facebook; ?>" name="facebook">
										</div>
										
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Twitter</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $twitter; ?>"   name="twitter">
										</div>
									
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Linkedin</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $linkedin; ?>"   name="linkedin">
										</div>
										
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Blog</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $blog; ?>"   name="blog">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Skype</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $skype; ?>"   name="skype">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Google plus</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $googleplus; ?>"   name="googleplus">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<label class="control-label" for="inputSuccess">Other</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $extraemail; ?>" name="extraemail">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<strong><p>Organizational Affiliation</p> </strong>
									<div>
										<h5>Professional Membership(s):</h5>
										<span class="col-md-12"> 
										ACSA- ICT Professionals Association: 
<input type="checkbox" class="checkbox" value="yes" 
<?php 
if($pm_ACSA=='yes'){
echo "checked";
}?> name="pm_ACSA" /> 
                                        Open Source Afghanistan:
<input type="checkbox" class="checkbox" value="yes" <?php 
if($pm_OSA=='yes'){
echo "checked";
}?>  name="pm_OSA"/></span>
									</div>
									<h5>Supervisor Information</h5>
									<label class="control-label" for="inputSuccess">Name</label>
									<div class="controls row">
									<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $osn; ?>"   name="org_super_name">
										</div>
									</div>
									<label class="control-label" for="inputSuccess">Phone Number</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $osp; ?>"   name="org_super_phone">
										</div>
									</div>
									<label class="control-label" for="inputSuccess">Email Adress</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $ose; ?>"   name="org_super_email">
										</div>
									</div>
<h5>Official Address:</h5>
<label class="control-label" for="inputSuccess">Country</label>
<div class="controls row">
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $oci; ?>"   name="org_countryid">
										</div>
									</div>
									<label class="control-label" for="inputSuccess">City</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $oc; ?>"   name="org_city">
										</div>
									</div>
									<label class="control-label" for="inputSuccess">Province</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $op; ?>"   name="org_province">
										</div>
									</div>
									<div>
										<h5>Nature of the organization:</h5>
<label class="control-label" for="inputSuccess">Org Title</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $ot; ?>"   name="org_title">
										</div>
									</div>
<span class="col-md-6"> 
 <label class="radio-inline">
 Government:<input type="radio" name="org_nature"  value="Government"
 <?php 
if($org_nature=='Government'){
echo "checked";
} ?>
>
</label><br/>
 <label class="radio-inline">
 Private Sector<input type="radio" name="org_nature"  value="Private Sector"
 <?php 
if($org_nature=='Private Sector'){
echo "checked";} ?>
 > 
</label>
<br/>
 <label class="radio-inline">
 Civil Society<input type="radio" name="org_nature"  value="Civil Society"
 <?php 
if($org_nature=='Civil Society'){
echo "checked";} ?>
 /> 
</label>
<br/>
</span>
<span class="col-md-6"> 
<label class="radio-inline">
Academia: 
<input type="radio" name="org_nature" value="Academia"
 <?php 
if($org_nature=='Academia'){
echo "checked";
}?>
> 
</label>
<br/>
<label class="radio-inline">
Inter governmental
<input type="radio" name="org_nature" value="Inter governmental"
 <?php 
if($org_nature=='Inter governmental'){
echo "checked";
}?>
/>
</label> 
<br/>
<label class="radio-inline">
Other
<input type="radio" value="other" name="org_nature"
 <?php 
if($org_nature=='other'){
echo "checked";
}?>
/>
</label>
</span>
<br/>
<span class="col-md-12"> 
<label class="control-label" for="inputSuccess">Org zip</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $oz; ?>" name="org_zip">
										</div>
									</div>
									
									<h5>Membership:</h5>
									
										CS Member: 
<input type="checkbox" class="checkbox" value="yes" 
<?php 
if($cm=='yes'){
echo "checked";
}?> name="CS_Member" /> 
                                        Open source member:
<input type="checkbox" class="checkbox" value="yes" <?php 
if($osm=='yes'){
echo "checked";
}?>  name="OpenSourceMember"/>
 Tech women member:
<input type="checkbox" class="checkbox" value="yes" <?php 
if($twm=='yes'){
echo "checked";
}?>  name="TechWomenMember"/>
</span>
<span class="col-md-12"> 
<label class="control-label" for="inputSuccess">Pro member other name:</label>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $pmon; ?>"   name="pro_member_other_name">
<label class="control-label" for="inputSuccess">Pro member other email:</label>
</div></div>
									<div class="controls row">
										<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $pmoe; ?>"   name="pro_member_other_email">
										</div>
									</div>
									<div class="controls row">
									<div class="col-sm-4">
									<label class="control-label" for="inputSuccess">Position:</label>
<input type="text" class="form-control" value="<?php echo $positions; ?>"   name="positions">
										</div>
									</div>
									</div>
 </span>
									</div>
								
								<hr>
								<div class="form-group ">
									<strong><p id="eduinfo">Educational Information</p> </strong>
									<div>
<label class="control-label" for="inputSuccess">College/
											university, country:</label>
<div class="controls row">
			<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $college_university; ?>" name="college_university">
											</div>
										</div>
										<label class="control-label" for="inputSuccess">Faculty
											/Concentration:</label>
										<div class="controls row">
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $faculty_concern; ?>" name="faculty_concern">
											</div>
										</div>
<label class="control-label" for="inputSuccess">Degree
	awarded/ working toward:</label>
										<div class="controls row">
											<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $degree_award; ?>" name="degree_award">
											</div>
										</div>
<label class="control-label" for="inputSuccess"> Number of semesters completed:</label>
										<div class="controls row">
											<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $number_semester; ?>" name="number_semester">
											</div>
										
										</div>
<div class="form-group ">
											<label class="control-label" for="inputSuccess">Graduation
date/ anticipated date</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $graduation_date; ?>" name="graduation_date">
												</div>
											
											</div>
										</div>
<div class="form-group ">
<label class="control-label" for="inputSuccess"> Number of credit hours completed</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $number_credit; ?>" name="number_credit">
												</div>
											
											</div>
										</div>
										<div class="form-group ">
											<label class="control-label" for="inputSuccess">Grade Point
												Average</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $grade_point; ?>" name="grade_point">
												</div>
											
											</div>
										</div>
										<div class="form-group ">
											<label class="control-label" for="inputSuccess">List your
												achievements in academic area</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $list_achievements; ?>" name="list_achievements">
												</div>
												
											</div>
										</div>
										<div class="form-group ">
											<label class="control-label" for="inputSuccess">Certification</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" name="certification" value="<?php echo $certification; ?>">
												</div>
												
											</div>
										</div>
											<div class="form-group ">
											<label class="control-label" for="inputSuccess">Knowledge plan:</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" name="knowledge_plan" value="<?php echo $kp; ?>">
												</div>
												
											</div>
										</div>
										<hr>
										<strong><p>Work Experience</p> </strong>
										<div class="form-group ">
											<label class="control-label" for="inputSuccess">Work
												experience with national, regional or international
												organizations:</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $wen; ?>"   name="work_experience_national">
												</div>
											</div>
										</div>
										<hr>
										<strong><p>Skills</p> </strong>
										<div class="form-group ">
											<label class="control-label" for="inputSuccess">IT/ICT
												Skills:</label>
											<div class="controls row">
												<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $itskills; ?>"   name="itskills">
												</div>
											</div>
<!-- Edited By Ali Sajjad Hosaini -->
<div class="controls row">
		<div class="col-sm-4 col-md-offset-4">
<input type="submit" class="form-control btn-success" value="update"/>	
		</div>
</div>
												
											</div>
												
											</div>
											</div>
										</div>
									</div>
									
									</form>
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
			//scroll
		$(".eduinfo").on("click",function(){
      $('html, body').animate({
        scrollTop: $("#eduinfo").offset().top
      }, 1000);
    });
		
		
		
		//end of scroll
	</script>
		<script type="text/javascript" src="../assets/js/holder.js"></script>
</body>
</html>