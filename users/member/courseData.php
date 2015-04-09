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
	die ("Unable to select database");
}
@$categ = $_GET['catid'];
@$catTitle = $_GET['catTitle'];
 if(isset($_GET['catid'])){
	//get data for course title
$titlecourse = mysql_query ("SELECT * FROM courses where category_id=$categ ORDER BY id DESC");
echo "<option> Select a title...</option>";
while($tcourse=mysql_fetch_array($titlecourse)){
	echo "<option value='".$tcourse['id']."'>".$tcourse['course_title']."</option>";
 }
 }
 elseif(isset($_GET['catTitle'])){
	 //get data for course Fee
$titleInfo = mysql_query ("SELECT * FROM courses where id='$catTitle'");
$ctitlerow=mysql_fetch_array($titleInfo);
$fee=$ctitlerow['fee'];
$dateto=$ctitlerow['date_to'];
$datefrom=$ctitlerow['date_from'];
$timefrom=$ctitlerow['time_from'];
$timeto=$ctitlerow['time_to'];
			echo	"<div class='form-group'>
					<label for='Fee' class='col-sm-3 control-label'>Fee</label>
							<div class='col-sm-9'>
								<input type='text' required class='form-control'
									id='courseFee' readonly value='$fee'/>	
							</div>
						</div>
						<div class='form-group'>
					<label for='inputEmail3' class='col-sm-3 control-label'>*Duration
								(months)</label>
							<div class='col-sm-9'>
								<div class='input-group col-sm-12'>
							<input type='text' class='form-control' 
							style='width: 44%' value='$datefrom' required/>
							&nbsp; To &nbsp;
							<input type='text' class='form-control' 
							style='width: 44%' value='$dateto' required/>
								</div>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputEmail3' class='col-sm-3 control-label'>*Time</label> 
							<div class='col-sm-9'>
								<div class='input-group col-sm-12'>	
							<input type='text' class='form-control' 
							style='width: 44%' value='$timefrom' readonly/>
							&nbsp; To &nbsp;
							<input type='text' class='form-control' 
							style='width: 44%' value='$timeto' readonly/>
								</div>
							</div>
					  </div> 
					  <div class='modal-footer'>
					<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					<button type='submit' class='btn btn-primary joinSuccess'>Join
						</button>
				</div>";
 }
   else{
	   header("location:../../login/login.php#login");
   }
?>