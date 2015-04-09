<?php
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
$selectLectures=mysql_query("SELECT * FROM lectures WHERE course_id='".$_GET['id']."'");
$selectMaterials=mysql_query("SELECT * FROM materials WHERE course_id='".$_GET['id']."'");
while($row = mysql_fetch_array($selectLectures)){
	$del=unlink("../images/lectures/". $row['image']);
	if(!$del){
		die("Error: " . mysql_error());
	}
}
while($row2 = mysql_fetch_array($selectMaterials)){
	$del2=unlink("../files/courses/". $row2['file_name']);
	if(!$del2){
		die("Error: " . mysql_error());
	}
}

$deleteQuery = mysql_query("DELETE FROM `courses` WHERE id='".$_GET['id']."'");
$deleteQuery2 = mysql_query("DELETE FROM `join_course` WHERE course_id='".$_GET['id']."'");
$deleteQuery3 = mysql_query("DELETE FROM `lectures` WHERE course_id='".$_GET['id']."'");
$deleteQuery4 = mysql_query("DELETE FROM `materials` WHERE course_id='".$_GET['id']."'");
if($deleteQuery){
	?>
	
	<?php
}
else{
	//echo "Course NOT deleted.";
	echo mysql_error();
}