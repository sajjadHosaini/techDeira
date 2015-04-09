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

$path = "../images/lectures/";

$valid_formats = array (
		"jpg",
		"png",
		"gif",
		"bmp",
		"JPG",
		"PNG",
		"GIF",
		"BMP" 
);
// if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
// {
$name = $_FILES ['lectureImage'] ['name'];
$size = $_FILES ['lectureImage'] ['size'];
$r = 10;
if (strlen ( $name )) {
	$r = 1;
	list ( $txt, $ext ) = explode ( ".", $name );
	if (in_array ( $ext, $valid_formats )) {
		$r = 2;
		if ($size < (1024*1024)) {
			$r = 3;
			
			$actual_image_name = time () . substr ( str_replace ( " ", "_", $txt ), 5 ) . "." . $ext;
			$tmp = $_FILES ['lectureImage'] ['tmp_name'];
			
			$r = 4;
			$selectTitle=mysql_query("Select * from `lectures` where lecture_title='".$_POST ['lectureTitle']."' and date='". $_POST['lectureDate']."'");
			$checkrowTitle=mysql_num_rows($selectTitle);
			if(!$checkrowTitle ==1){
			$insert = mysql_query ( "INSERT INTO `lectures` VALUES(null,'" . $_POST ['lectureTitle'] . "','" . $_POST ['desc'] . "','" . $_POST ['lectureDate'] . "','$actual_image_name','" . $_POST ['cid'] . "')" ) or die ( "error:" . mysql_error () );
			// echo "<img src='uploads/".$actual_image_name."' class='preview'>";
			
			if ($insert) {
				$moveFile = move_uploaded_file ( $tmp, $path . $actual_image_name );
				if($moveFile){
					echo "";
				}
				else {
					echo "NOT MOVED";
				}
				//header("location:../courses.php");
			} 

			else {
				echo "failed";
				$r = 77;
			}
		}
		else{
			echo "Lecture already exist";
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

?>
