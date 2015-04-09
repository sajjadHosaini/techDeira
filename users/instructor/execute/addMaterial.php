<?php
session_start ();
require '../../../execute/auth.php';
include '../../../inc/config.inc';

$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
if (! $link) {
	die ( 'Failed to connect to server: ' . mysql_error () );
}

// Select database
$db = mysql_select_db ( DB_DATABASE );
if (! $db) {
	die ( "Unable to select database" );
}

mysql_query ( 'SET NAMES utf8' );
mysql_query ( 'SET CHARACTER_SET utf8' );

$path = "../files/courses/";

$valid_formats = array (
		"doc",
		"docx",
		"pdf"
);
// if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
// {
$name = $_FILES ['fileName'] ['name'];
$size = $_FILES ['fileName'] ['size'];
$r = 10;
if (strlen ( $name )) {
	$r = 1;
	list ( $txt, $ext ) = explode ( ".", $name );
	if (in_array ( $ext, $valid_formats )) {
		$r = 2;
		if ($size < (1024*1024*1024)) {
			$r = 3;
			
			$actual_image_name = time () . substr ( str_replace ( " ", "_", $txt ), 5 ) . "." . $ext;
			$tmp = $_FILES ['fileName'] ['tmp_name'];
			
			$r = 4;
			$selectTitle=mysql_query("Select * from `materials` where material_title='".$_POST ['materialTitle']."'");
			$checkrowTitle=mysql_num_rows($selectTitle);
			if(!$checkrowTitle ==1){
			$insert = mysql_query ( "INSERT INTO `materials` VALUES(null,'" . $_POST ['materialTitle'] . "','".$_POST['desc']."','$actual_image_name','" . $_POST ['cid'] . "')" ) or die ( "error:" . mysql_error () );
			// echo "<img src='uploads/".$actual_image_name."' class='preview'>";
			
			if ($insert) {
				$moveFile = move_uploaded_file ( $tmp, $path . $actual_image_name );
				if($moveFile){
					echo "";
				}
				else {
					echo "NOT MOVED";
				}
			} 

			else {
				echo "failed";
				$r = 77;
			}
		}
		else {
			echo "Material already exist";
		}
		} else {
			echo "Image file size max 1 MB";
			$r = 88;
		}
	} else {
		echo "Invalid file format..";
		$r = 99;
	}
} 

else {
	"Please select an image.";
}
