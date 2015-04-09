<?php
ob_start();
require_once ('../inc/config.inc');

// Array to store validation errors
$errmsg_arr = array ();
// Validation error flag
$errflag = false;

// Connect to mysql server
$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
if (! $link) {
	die ( 'Failed to connect to server: ' . mysql_error () );
}

// Select database
$db = mysql_select_db ( DB_DATABASE );
if (! $db) {
	die ( "Unable to select database" );
}

if (isset ( $_POST ['register'] )) {
	function clean($str) {
		$str = @trim ( $str );
		if (get_magic_quotes_gpc ()) {
			$str = stripslashes ( $str );
		}
		return mysql_real_escape_string ( $str );
	}
	
	$firstname = $_POST ['firstname'];
	$lastname = $_POST ['lastname'];
	$dob = $_POST ['dob'];
	$email = clean ( $_POST ['emailid'] );
	$password = clean ( $_POST ['password'] );
	$role=$_GET['role'];
	$key = $email.rand();
	$key = md5($key);
	
	//Check wether the user already exists in system

	$check_user = mysql_query("SELECT * FROM `users` WHERE email_id='$email'");
	if(mysql_num_rows($check_user)==1) 
		{
			header("Location: ../login/login.php?check_user=alreadyexists#login");
			die();
		}
	if (empty ( $firstname ) || empty ( $lastname ) || empty ( $email ) || empty ( $password )) {
		$errmsg_arr [] = "Empty fields are not accepted.";
		$errflag = true;
	} else {
		$password = md5 ( $password );
		
		// add to the database
		$add = mysql_query ( "INSERT INTO `users_no_confirm` VALUES(NULL,'$email','$password','$firstname','$lastname','$dob','$role','$key')" );
		
		if ($add) {
			$message = "Welcome '$firstname', you have successfully filled in our registration form. \n\n";
			$message.="Click the link below to confirm your registration.\n\n";
			$message.="http://deira.technation.af/execute/confirm_email.php?key=$key \n\n";
			$message.="Thanks you.";

			$mail = mail($email, 'TechDeira Registration Confirmation', $message, 'From:deira@technation.af');
			if($mail){
				header("Location: ../login/login.php?register=success#login");
			}
			else{
				header("Location: ../login/login.php?register=fail#login");
			}
		} 
		else 
		{
			$errmsg_arr [] = "User could not be added to the database. Reason: " . mysql_error ();
			$errflag = true;
		}
	}
} 
else 
{
	header ( "Location: ../login/index.php#register" );
}