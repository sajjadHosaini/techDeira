<?php

	require_once('../inc/config.inc');
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}

	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
	}
	$email = $_POST['emailid'];
	$newPassword = generateRandomString(10);
	$newPasswordEnc = md5($newPassword);
	$qry = mysql_query("UPDATE users SET password='$newPasswordEnc' WHERE email_id='$email'");
	if($qry){
		$message = "Congrats! you have successfully reset your password. \n\n";
		$message .= "Your New Password: '$newPassword' \n\n";
		$message .= "You can later change your password in your Profile section in your Dashboard. \n\n";
		$message .= "Thank you. ";

		$mail = mail($email, 'TechDeira - Password Reset', $message, 'From:deira@technation.af');

		if($mail){
			header("Location: ../admin/index.php?reset=success#login");
		}
		else{
			echo "Mail Not Sent";
		}
	}