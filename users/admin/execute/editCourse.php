<?php
session_start();
require '../../../execute/auth.php';
include '../../../inc/config.inc';

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
	die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db(DB_DATABASE);
if(!$db) {
	die("Unable to select database");
}
$fee = $_GET['courseFee'] . " " . $_GET['currency'];
$dateFrom = $_GET['dateFrom'];
$dateTo = $_GET['dateTo'];
if(isset($_GET['submit'])){

	$addcourse = mysql_query("UPDATE courses SET course_title='".$_GET['courseTitle']."',`desc`='".$_GET['desc']."',fee='".$fee."',date_from='$dateFrom',date_to='$dateTo',time_from='".$_GET['timeFrom']."',time_to='".$_GET['timeTo']."',category_id='".$_GET['courseCategory']."',status='".$_GET['status']."' WHERE id = '".$_GET['id']."'");
	if($addcourse){
		header("Location:../courses.php?editCourse=success");
	}	
	else{
		echo mysql_error();
	}
}
else{
	header("Location: ../courses.php");
}

