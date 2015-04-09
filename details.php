<?php
include 'header.php';
include 'auth.php';
?>
<head>
<link rel="stylesheet"
	href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/css/bootstrap.min.css">


</head>
<div class="row-fluid" style="margin-top: 65px">
<div class="hero-unit courseDetails span6">

<span><?php 
if (isset($_GET['cat'])){
$cat=$_GET['cat'];
	$qry=mysql_query("SELECT * FROM course_categories WHERE id=$cat");
	while($row=mysql_fetch_array($qry)){
		echo  $row['name'] ." ". "</br> " ;


	}
  
 
}

?></span>
<h1><?php 
 $query=mysql_query("SELECT * FROM courses WHERE category_id=$cat");
 while ($catrows=mysql_fetch_array ($query)){
 	echo $catrows['course_title'] ." ". "</br> " ;

 }
 ?></h1>
 <?php 
$q=mysql_query("SELECT firstname,lastname FROM users WHERE id IN (SELECT instructor_id FROM courses WHERE category_id=$cat)");
 if($q){
 while ($userrows=mysql_fetch_array ($q)){
       $b=$userrows['firstname'];
 	  $c=" ".$userrows['lastname'] . "</br> " ;

 }}
 else{
echo "sorry!";
}
 ?>
<a   data-toggle="modal" href="#addCourseModal"><?php echo$b?></a>


<a class="btn btn-primary btn-large"><strong>
<i class="icon-plus"></i><a style="color:white;" href="login/login.php"> Join Now </a>
</strong>
</a>

</p>
</div>
<div class="span6" style="margin:0">
<div class="well lecturesDesc" style="margin:0">

<?php 




						$user = mysql_query("SELECT * FROM lectures WHERE course_id IN(SELECT id FROM courses WHERE category_id=$cat)");
						$userrow = mysql_fetch_object($user);
						?>
						 
						<h2><strong> <i class="fa fa-list"></i>Lectures </strong></h2>
						<hr>
						<div class=col-md-4><img src="assets/img/<?php echo $userrow->image;?>"></div></br>
						<div class=col-md-8>
						<?php 
						
						echo "<strong>Lecture Title:</strong> ". $userrow->lecture_title ." ". "</br> " ;
						echo "<strong>Lecture Description:</strong>". $userrow->lecture_desc." " ."</br>";
						echo "<strong>Date :</strong>". $userrow->date ." "."</br> " ;
		               ?>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
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
<?php 
include 'footer.php';