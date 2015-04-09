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

<body onload="allLoad();">
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
					</ul>
				</div>
			</div>
			<div id="content" class="col-lg-10 col-sm-11">
				<h1>Courses</h1>
				<span class="pull-right"><button class="btn btn-large"
						data-toggle="modal" data-target="#addCourseModal">
						<i class="fa fa-plus-circle"></i> &nbsp; Add New Course
					</button></span><br> <br>
				<div class="box">
					<div class="box-header">
						<h2>
							<i class="fa fa-laptop"></i>Available Courses
						</h2>
						<div class="box-icon">
							<a href="index.html#" class="btn-minimize"><i
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
										<th>Instructor</th>
										<th>Category</th>
										<th>Duration</th>
										<th>Time</th>
										<th>Total Member</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$count = 1;
									$courseselect = mysql_query ( "SELECT * FROM courses ORDER BY date_from desc" );
									while ( $courserow = mysql_fetch_array ( $courseselect ) ) {
										$select_cat = mysql_query ( "SELECT name FROM course_categories where id='" . $courserow ['category_id'] . "'" );
										$catrows = mysql_fetch_array ( $select_cat );
										$instructor = mysql_query ( "SELECT * FROM users WHERE role='instructor' ORDER BY firstname" );
										$inrows = mysql_fetch_array ( $instructor );
		/*Need to improve*/				$courseId=$courserow['id'];
										$students = mysql_query ( "SELECT * FROM join_course WHERE course_id=$courseId" );
										$countMember = mysql_num_rows ( $students );
										?> 
									<tr class="tr<?php echo $courserow['id']; ?>">
										<td><?php echo $count; ?></td>
										<td><?php echo $courserow['course_title']; ?></td>
										<td><?php echo $inrows['firstname']; ?></td>
										<td><?php echo $catrows['name']; ?></td>
										<td><?php echo $courserow['date_from']; ?> to <?php echo $courserow['date_to']; ?></td>
										<td><?php echo $courserow['time_from']; ?> to <?php echo $courserow['time_to']; ?></td>
										<td><?php echo $countMember; ?></td>
										<td><?php echo $courserow['status']; ?></td>
										<td><a href="courses.php?id=<?php echo $courserow['id']; ?>"><i class="fa fa-eye"></i> View</a> | <a
											href="#" class="deleteCourse"
											name="<?php echo $courserow['id']; ?>"><i
												class="fa fa-times-circle"></i> Delete</a></td>
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
											<strong>Status: </strong>
											<?php echo $rowCourseDetails['status']; ?><br/><br/>
												<strong>Duration: </strong> <?php echo $rowCourseDetails['date_from']; ?> to <?php echo $rowCourseDetails['date_to']; ?>
											</p>
											<p>
												<strong>Course Fee: </strong> <?php echo $rowCourseDetails['fee']; ?>
											</p>
											<p>
												<strong>Time: </strong> <?php echo $rowCourseDetails['time_from']; ?> to <?php echo $rowCourseDetails['time_to']; ?>
											</p>
										</div>
										<div class="col-md-6">
											<!-- Single button -->
											<div class="btn-group pull-right">
												<button type="button"
													class="btn btn-default dropdown-toggle"
													data-toggle="dropdown">
													<span class="fa fa-cog"></span> Actions <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#" data-toggle="modal" data-target="#editCourseModal"><span class="fa fa-pencil"></span> Edit</a></li>
													<li><a href="#" class="deleteCourse" name="<?php echo $_GET['id']; ?>"><span class="fa fa-trash-o"></span> Delete</a></li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<div class="tab-pane" id="lectures">
									<div class="row" style="padding: 20px;">
										<div class="col-md-12 well myWell">
											<h1>Current Lectures</h1>
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
														<th>Description</th>
														<th>Date</th>
														<th>Image</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody id="showLecture">
						<!-- data will come from showLecture.php -->		
												</tbody>
											</table>
										</div>
											<!-- add section Added -->
										<div class="col-md-6 well">
											<h1>Add New Lecture</h1>
											<hr>
											<form name="lectureForm" id="lectureForm"
												action="../execute/addLecture.php" method="POST"
												enctype="multipart/form-data"
												class="form-horizontal" role="form">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">
														Title</label>
													<div class="col-sm-9">
														<input type="text" required class="form-control"
															name="lectureTitle" id="inputEmail3" />
													</div>
												</div>

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">Description</label>
													<div class="col-sm-9">
														<textarea class="form-control" required name="desc"
															style="height: 100px"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">Date
													</label>
													<div class="col-sm-9">
														<div class="input-group col-sm-12">
															<input id="lectureDate" type="text" required
																class="form-control" name="lectureDate" readonly />
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">Image<br></label>
													<div class="col-sm-9">
														<div class="fileinput fileinput-new"
															data-provides="fileinput">
															<div class="fileinput-new thumbnail"
																style="width: 200px; height: 150px;">
																<img
																	data-src="holder.js/1000x800/text:Minsize: 1000x800"
																	alt="...">
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail"
																style="max-width: 200px; max-height: 150px;"></div>
															<div>
																<span class="btn btn-default btn-file"><span
																	class="fileinput-new">Select image</span><span
																	class="fileinput-exists">Change</span><input required
																	type="file" name="lectureImage"></span> <a href="#"
																	class="btn btn-default fileinput-exists"
																	data-dismiss="fileinput">Remove</a>
															</div>
														</div>
													</div>
												</div>
												<input type="hidden" name="cid" value="<?php echo $_GET['id']; ?>">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label"> </label>
													<div class="col-sm-9">
														<input type="submit" name="submit"
															class="btn btn-success col-md-7" value="Add Lecture">
													</div>
												</div>
											</form>

										</div>
									</div>
								</div>
								<div class="tab-pane" id="materials">
									<div class="row" style="padding: 20px;">
										<div class="col-md-12 well myWell">
											<h1>Materials</h1>
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Title</th>
														<th>Description</th>
														<th>Download</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody id="showMaterial">
						<!-- data will come from showMaterial.php -->	
								
												</tbody>
											</table>
										</div>
										<!-- add section Added -->
										<div class="col-md-6 well">
											<h1>Add New Material</h1>
											<hr>
											<form name="materialForm" id="materialForm"
												action="../instructor/execute/addmaterial.php" method="POST"
												enctype="multipart/form-data"
												class="form-horizontal" role="form">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">
														Title</label>
													<div class="col-sm-9">
														<input type="text" required class="form-control"
															name="materialTitle" id="inputEmail3" />
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">Description</label>
													<div class="col-sm-9">
														<textarea class="form-control" name="desc" style="height: 100px"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label">File</label>
													<div class="col-sm-9">
														<input class="form-control" type='file' name="fileName">
															<p class="help-block">Supported: .pdf, .docx, .doc</p>
													</div>
												</div>
												<input type="hidden" name="cid" value="<?php echo $_GET['id']; ?>">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-3 control-label"> </label>
													<div class="col-sm-9">
														<input type="submit" name="submit"
															class="btn btn-success col-md-7" value="Add Material">
													</div>
												</div>
											</form>

										</div>
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

	<!-- start: JavaScript-->
	<!--[if !IE]>-->



	<!-- end: JavaScript-->

	<!-- Edit course modal -->
	<div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Edit Course</strong>
					</h1>
				</div>
				<div class="modal-body">
					<form action="execute/editCourse.php" method="get"
						class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Course
								Title</label>
							<div class="col-sm-9">
								<input type="text" required class="form-control"
									name="courseTitle" value="<?php echo $rowCourseDetails['course_title']; ?>" id="inputEmail3" />
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Category</label>
							<div class="col-sm-9">
						<?php
						$catselect = mysql_query ( "SELECT * FROM course_categories WHERE id <> 999 ORDER BY name" );
						?>
						<select class="form-control" name="courseCategory">
									<option>Select a category...</option>
							<?php
							while ( $catrow = mysql_fetch_array ( $catselect ) ) {

								if($rowCourseDetails['category_id']==$catrow['id']){
									?>
									<option selected value="<?php echo $catrow['id']; ?>"><?php echo $catrow['name']; ?></option>
									<?php
									continue;
								}
								?>
								<option value="<?php echo $catrow['id']; ?>"><?php echo $catrow['name']; ?></option>
							<?php 
						} ?>
							<option value="999">Others...</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="desc" style="height: 100px"><?php echo $rowCourseDetails['desc']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Fee</label>
							<div class="col-sm-9">
								<?php list($fee,$cur)=explode(" ", $rowCourseDetails['fee']); ?>
								<input type="text" required class="form-control"
									name="courseFee" value="<?php echo $fee; ?>"/> <select name="currency"
									class="form-control" style="width: 20%; margin-top: 5px;">
									<option value="AFA">AFA</option>
									<option value="USD">USD</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">*Duration
								(months)</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
									<input type="text" class="form-control dateFrom"
										style="width: 44%" name="dateFrom" value="<?php echo $rowCourseDetails['date_from']; ?>" readonly /> &nbsp; To
									&nbsp; <input type="text" value="<?php echo $rowCourseDetails['date_to']; ?>"class="form-control dateTo"
										style="width: 46%" name="dateTo" readonly>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">*Time</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
									<input type="text" class="form-control timeFrom"
										style="width: 44%" value="<?php echo $rowCourseDetails['time_from']; ?>" name="timeFrom" /> &nbsp; To &nbsp; <input
										type="text" value="<?php echo $rowCourseDetails['time_to']; ?>" class="form-control timeTo"
										style="width: 46%" name="timeTo">

								</div>
							</div>
						</div>
							<div class="form-group">
					  <label for="inputEmail3" class="col-sm-3 control-label">Status:</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
								<input type="radio" name="status" value="active"  <?php 
									if($rowCourseDetails['status']=='active'){
									echo "checked";
									} ?>
									  >Active
								<input type="radio" name="status"  value="deactive" <?php 
									if($rowCourseDetails['status']=='deactive'){
									echo "checked";
									} ?> >Deactive
								</div>
							</div>
					  </div>
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save
						changes</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Add course modal -->
	<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Add New Course</strong>
					</h1>
				</div>
				<div class="modal-body">
					<form action="execute/addCourse.php" method="get"
						class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Course
								Title</label>
							<div class="col-sm-9">
								<input type="text" required class="form-control"
									name="courseTitle" id="inputEmail3" />
							</div>
						</div>
						<div class="form-group">
							<label for="instructor" class="col-sm-3 control-label">Instructor</label>
							<div class="col-sm-9">
						<?php
						$instselect = mysql_query ( "SELECT * FROM users WHERE role='instructor' ORDER BY firstname" );
						?>
						<select class="form-control" name="instructor">
									<option>Choose an Instructor</option>
							<?php
							while ( $instrow = mysql_fetch_array ( $instselect ) ) {
								?>
								<option value="<?php echo $instrow['id']; ?>"><?php echo $instrow['firstname']; ?></option>
							<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Category</label>
							<div class="col-sm-9">
						<?php
						$catselect = mysql_query ( "SELECT * FROM course_categories WHERE id <> 999 ORDER BY name" );
						?>
						<select class="form-control" name="courseCategory">
									<option>Select a category...</option>
							<?php
							while ( $catrow = mysql_fetch_array ( $catselect ) ) {
								?>
								<option value="<?php echo $catrow['id']; ?>"><?php echo $catrow['name']; ?></option>
							<?php } ?>
							<option value="999">Others...</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="desc" style="height: 100px"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Fee</label>
							<div class="col-sm-9">
								<input type="text" required class="form-control"
									name="courseFee" /> <select name="currency"
									class="form-control" style="width: 20%; margin-top: 5px;">
									<option value="AFA">AFA</option>
									<option value="USD">USD</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">*Duration
								(months)</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
									<input type="text" class="form-control dateFrom"
										style="width: 44%" name="dateFrom" readonly /> &nbsp; To
									&nbsp; <input type="text" class="form-control dateTo"
										style="width: 46%" name="dateTo" readonly>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">*Time</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
									<input type="text" class="form-control timeFrom"
										style="width: 44%" name="timeFrom" /> &nbsp; To &nbsp; <input
										type="text" class="form-control timeTo"
										style="width: 46%" name="timeTo">
								</div>
							</div>
					  </div>
					  <div class="form-group">
					  <label for="inputEmail3" class="col-sm-3 control-label">Status:</label>
							<div class="col-sm-9">
								<div class="input-group col-sm-12">
								<input type="radio" name="status" value="active">Active
								<input type="radio" name="status"  value="deactive">Deactive
								</div>
							</div>
					  </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Save
						changes</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<div class="modal fade" id="deleteCourseModal" tabindex="-1"
		role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Delete Course</strong>
					</h1>
				</div>
				<div class="modal-body"
					style="padding: 0 0 0 20px; margin-top: -5px">
					<h3>Are you sure to delete this course?</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name="submit"
						class="btn btn-danger acceptDeleteCourse">Delete</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- Start of Delete Lecture -->
	<div class="modal fade" id="deleteLectureModal" tabindex="-1"
		role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Delete Lecture</strong>
					</h1>
				</div>
				<div class="modal-body"
					style="padding: 0 0 0 20px; margin-top: -5px">
					<h3>Are you sure to delete this Lecture?</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name="submit"
						class="btn btn-danger acceptDeleteLecture">Delete</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- End of Delete Lecture -->
		<!-- Start of Delete Material -->
	<div class="modal fade" id="deleteMaterialModal" tabindex="-1"
		role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h1 class="modal-title" id="myModalLabel">
						<strong>Delete Material</strong>
					</h1>
				</div>
				<div class="modal-body"
					style="padding: 0 0 0 20px; margin-top: -5px">
					<h3>Are you sure to delete this Material?</h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name="submit"
						class="btn btn-danger acceptDeleteMaterial">Delete</button>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- End of Delete Material -->

	<button id="addCourseSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"New Course Added Successfully","layout":"topCenter","type":"success"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<button id="editCourseSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Changes Saved Successfully","layout":"topCenter","type":"success"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<button id="deleteCourseSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Course Deleted Successfully","layout":"topCenter","type":"error"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
		<button id="deleteLectureSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Lecture Deleted Successfully","layout":"topCenter","type":"error"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<button id="deleteMaterialSuccess" class="btn btn-primary noty hide"
		data-noty-options='{"text":"Material Deleted Successfully","layout":"topCenter","type":"error"}'>
		<i class="fa fa-bell"></i> Top Center (fade)
	</button>
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

	<script src="../assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
			</script>

	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<!-- page scripts -->
	<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="../http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="../assets/js/jquery.timepicker.js"></script>
	<script src="../assets/js/myscript.js"></script>

	<script
		src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.noty.min.js"></script>
	<!-- theme scripts -->
	<script src="../assets/js/custom.min.js"></script>
	<script src="../assets/js/core.min.js"></script>

	<script type="text/javascript">
		$(function(){
			<?php if(isset($_GET['addCourse']) && $_GET['addCourse']=="success") { ?>
				$("#addCourseSuccess").click();
			<?php } elseif(isset($_GET['editCourse']) && $_GET['editCourse']=="success") { ?>
				$("#editCourseSuccess").click();
			<?php
			} else {
				echo "HELLO";
			}
			?>
		});
	</script>
	<script type="text/javascript">
	function allLoad(){
		getLecture();
		getMaterial();
	}
	//to get the data of lectures
	function getLecture(){
	var course_id= <?php echo $_GET['id']; ?>;
	var getLecData = function (data) {
	$('#showLecture').html(data);
	}
	$.ajax({
        url : 'showLecture.php?courseid='+course_id,
        type: 'GET',
        success : getLecData
    })
	}
	//to get the data of material
	function getMaterial(){
	var courseid= <?php echo $_GET['id']; ?>;
	var getMatData = function (data) {
	$('#showMaterial').html(data);
	}
	$.ajax({
        url : 'showMaterial.php?courseid='+courseid,
        type: 'GET',
        success : getMatData
    })
	}
	</script>
	<script type="text/javascript">
		<!-- Deleting the Material JQuery.ajax-->
	function runDelMat(id){
		$("#deleteMaterialModal").modal();
		$(".acceptDeleteMaterial").on("click", function() {
			$.ajax({
				type : "GET",
				url : "../instructor/execute/deleteMaterial.php?id=" + id,
			//	data : "id=" + id,
				cache : false,
				success : function(html) {
						$("#deleteMaterialModal").modal('hide');
						$("#deleteMaterialSuccess").click();
						$(".mtr" + id).hide();
						getMaterial();
				}
			});
		});
	}
		<!-- Deleting the lecture JQuery.ajax-->
		function runDelLec(id) {
		$("#deleteLectureModal").modal();
		$(".acceptDeleteLecture").on("click", function() {
			$.ajax({
				type : "GET",
				url : "../instructor/execute/deleteLecture.php",
				data : "id=" + id,
				cache : false,
				success : function(html) {
						$("#deleteLectureModal").modal('hide');
						$("#deleteLectureSuccess").click();
						$(".ltr" + id).hide();
						getLecture();
				}
			});
		});
	}
	</script>
	<script type="text/javascript" src="../assets/js/holder.js"></script>
</body>
</html>