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

$select=mysql_query("SELECT * FROM materials WHERE id='".$_GET['id']."'");
$row = mysql_fetch_array($select);

$deleteQuery = mysql_query("DELETE FROM materials WHERE id='".$_GET['id']."'");
if($deleteQuery){
	unlink("../files/courses/".$row['file_name']);
}

