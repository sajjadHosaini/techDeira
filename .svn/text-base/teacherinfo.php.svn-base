<?php 
include 'header.php';
include 'inc/config.inc';
require 'execute/auth.php';


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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Instructor Information</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/preview.css" rel="stylesheet" />
<link href="css/datepicker.css" rel="stylesheet" />
<script src="js/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300'
	rel='stylesheet' type='text/css'>
<style type="text/css">
.social-icons div {
	display: inline;
}

#customBtn {
	display: inline-block;
	width: auto;
	border-radius: 5px;
	color: #dd4b39;
	white-space: nowrap;
}

#customBtn:hover {
	color: #e74b37;
	cursor: pointer;
	cursor: hand;
}

span.label {
	font-weight: bold;
}

span.icon {
	background: url('/+/images/branding/btn_red_32.png') transparent 5px 50%
		no-repeat;
	display: inline-block;
	vertical-align: middle;
	width: 35px;
	height: 35px;
	border-right: #bb3f30 1px solid;
}

span.buttonText {
	display: inline-block;
	vertical-align: middle;
	padding-left: 35px;
	padding-right: 35px;
	font-size: 14px;
	font-weight: bold;
	/* Use the Roboto font that is loaded in the <head> */
	font-family: 'Roboto', arial, sans-serif;
}
</style>
</head>

<?php


if (isset($_GET['cat'])){
$cat=$_GET['cat'];
	
						$user = mysql_query("SELECT * FROM users WHERE id IN (SELECT instructor_id FROM courses WHERE category_id=$cat)");
						$userrow = mysql_fetch_array($user);
						
						echo"<strong> Basic information </strong>";
						echo"<hr>";
						echo "<strong>First Name:  </strong>". $userrow['firstname'] ." ". "</br> " ;
						echo "<strong>Last Name:  </strong>". $userrow['lastname']." " ."</br>";
						echo "<strong>Date Of Birth:  </strong>". $userrow['dob'] ." "."</br> " ;
		                echo "<strong>Role:  </strong>". $userrow['role'];
						}
						?>
						
					</div>
					<div>
					
					
					</div>
					
					
					</div>
				</div>