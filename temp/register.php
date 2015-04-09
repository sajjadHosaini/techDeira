<?php
	require_once('../inc/config.inc');
	error_reporting(0);
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

	// check if the user is already registered
	$existing_qry = mysql_query("SELECT * FROM `temp_registers1` WHERE email = '".$_POST['email']."'");
	if(mysql_num_rows($existing_qry) > 0) {
		echo "You are already registered. ";
		exit();
	}
 
	$insert = mysql_query("INSERT INTO `temp_registers1` VALUES(null,'".$_POST['fullname']."', '".$_POST['address']."', '".$_POST['gender']."', '".$_POST['homephone']."', '".$_POST['cellphone']."', '".$_POST['email']."', '".$_POST['dob-day']."', '".$_POST['dob-month']."', '".$_POST['dob-year']."', '".$_POST['employer']."', '".$_POST['webcourse']."', '".$_POST['javacourse']."', '".$_POST['linuxcourse']."')");
	if($insert){
		echo "success";
	 $mail=	mail($_POST['email'],)
	 if($mail)
	 {
		 $query = mysql_query("insert inot par_regitser")
		 if(query)
		 {
			
		 }
	 }
	}
	else{
		die("Error: " . mysql_error());
	}