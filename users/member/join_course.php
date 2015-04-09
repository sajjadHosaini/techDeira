<html>
<head>
<script src='../assets/js/jquery-1.11.1.min.js'></script>
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
echo "
<div class='modal-body'>
<form class='form-horizontal' role='form' action='join_check.php' id='joinForm' type='post'>
						<div class='form-group'>
	<label for='inputPassword3' class='col-sm-3 control-label'>Category</label>
							<div class='col-sm-9'>";
						 $catselect = mysql_query ( 'SELECT * FROM course_categories WHERE id <> 999 ORDER BY name' );
						echo "<select class='form-control' id='courseCategory' onchange='getCate();' >
									<option>Select a category...</option>";
							 while ( $catrow = mysql_fetch_array ( $catselect ) ) {

							echo "<option value='".$catrow['id']."'>". $catrow['name']."</option>";
							  }
								echo "</select>
							</div>
						</div>
						<div class='form-group'>
							<label for='course title' class='col-sm-3 control-label'>Course title</label>
							<div class='col-sm-9'>
								<select required class='form-control'
									id='courseTitle' onchange='getTitle();' required name='courseId'>
									<option> Select a title...</option>
									</select>
							</div>
						</div>
						<div id='forTitle'>
						<div class='form-group'>
					<label for='Fee' class='col-sm-3 control-label'>Fee</label>
							<div class='col-sm-9'>
								<input type='text' required class='form-control'
									id='courseFee' readonly/>	
							</div>
						</div>
						<div class='form-group'>
					<label for='inputEmail3' class='col-sm-3 control-label'>*Duration
								(months)</label>
							<div class='col-sm-9'>
								<div class='input-group col-sm-12'>
							<input type='text' class='form-control' 
							style='width: 44%' value='' readonly/>
							&nbsp; To &nbsp;
							<input type='text' class='form-control' 
							style='width: 44%' value='' readonly/>
								</div>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputEmail3' class='col-sm-3 control-label'>*Time</label> 
							<div class='col-sm-9'>
								<div class='input-group col-sm-12'>	
						<input type='text' class='form-control' 
							style='width: 44%' value='' readonly/> 
							&nbsp; To &nbsp;
							<input type='text' class='form-control' 
							style='width: 44%' value='' readonly/>
								</div>
							</div>
					  </div> 
				</div> <!-- End of forTitle div -->
			</div>
		</form>";
?>
</head>
<body>
<script type="text/javascript">
function getCate(){
				//to get the value of selected option
	var cat_id =$('#courseCategory option:selected').attr('value');
	var getData = function (data) {
	$('#courseTitle').html(data);
	}
	$.ajax({
        url : 'courseData.php?catid='+cat_id,
        type: 'POST',
        success : getData
    })
}
function getTitle(){
				//to get the value of selected option
	var cat_title =$('#courseTitle option:selected').val();
	var getData = function (data) {
				// to set data for value of input box 
	// var cat_title =$('#courseFee').val(data);
				// to set data for a div area
		$('#forTitle').html(data);
	}
	$.ajax({
        url : 'courseData.php?catTitle='+cat_title,
        type: 'POST',
        success : getData
    })
}
</script>
</body>
</html>