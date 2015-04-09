<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('../inc/config.inc');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
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
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	//Sanitize the POST values
	$login = clean($_POST['emailid']);
	$password = clean($_POST['password']);
	$checkrole = $_POST['loginAs'];
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	$roleqry="SELECT * FROM `users` WHERE email_id='$login'"; 
	$runroleqry=mysql_query($roleqry);
	$fetchrole=mysql_fetch_array($runroleqry);
	$resultrole=$fetchrole['role'];
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERROR'] = $errmsg_arr;
		session_write_close();
		header("location: ../login/login.php#login");
		exit();
	}
	else{
	//Create query 
	$qry="SELECT * FROM `users` WHERE email_id='$login' AND password='".md5($_POST['password'])."' AND role ='$checkrole'";
	$result=mysql_query($qry);
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			$member = mysql_fetch_assoc($result);
			session_regenerate_id();
			$_SESSION['USER_ID'] = $member['id'];
			$_SESSION['FNAME'] = $member['firstname'];
			$_SESSION['LNAME'] = $member['lastname'];
			session_write_close();
				switch($member['role']){
     				case 'instructor':
        				header('location: ../users/instructor/index.php');
        			break;
        			case 'member':
        				header('location: ../users/member/index.php');
        			break;
      			}
			exit();
		}
		else {
			header("Location: ../login/login.php?log_err=true#login");
			exit();
		}
	}
	else {
		 die("Query failed");
	 }
	}
?>