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
$courseId=$_GET['courseId'];
$checkCourseId="Select * from join_course where course_id='$courseId'";
$checkqry=mysql_query($checkCourseId);
$checkrow=mysql_num_rows($checkqry);
if($checkrow==1){
	header("location:courses.php?join=exist");
}
else{
if(isset($_GET['courseId'])){
	$memberId=$_SESSION ['USER_ID'];
	$join="Insert into `join_course`(`course_id`, `user_id`) values($courseId,$memberId)";
	$joinRun=mysql_query($join);
	if($joinRun){
		header("location:courses.php?join=success");
	}
}
else{
	header("location:courses.php?join=notSpecified");
}
}
?>