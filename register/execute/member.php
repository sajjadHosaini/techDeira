<?php
session_start();
include('../../inc/config.inc');
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
		//Gets the current configuration setting of magic_quotes_gpc
		//Sets the magic_quotes state for GPC (Get/Post/Cookie) operations. When magic_quotes are on, all ' (single-quote), " (double quote), \ (backslash) and NUL's are escaped with a backslash automatically. 
			$str = stripslashes($str);
			
			//Un-quotes a quoted string
		}
		return mysql_real_escape_string($str);
		
		//Escapes special characters in a string for use in an SQL statement
	}
	
	
	//Sanitize the POST values
	
	$email = clean($_POST['emailfield']);
	$pass = clean($_POST['passwordfield']);
	$confPass=clean($_POST['cpasswordfield']);
	
	//Input Validations
	
	if($email == '') {
		$errmsg_arr[] = 'Email Address missing';
		$errflag = true;
	}
	if($pass !=''){
	if(strlen($pass)<6) {
		$errmsg_arr[] = 'Password is too short, Minimium 6 characters';
		$errflag = true;
	}
	}
	if($pass == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($confPass == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($pass, $confPass) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	
		//Check for duplicate login ID
	if($email != '') {
		$qry = "SELECT * FROM users WHERE email_id='$email'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'The Email Address is already in use, please use another one.';
				$errflag = true;
			}
			//will free all memory associated with the result identifier result. 
		}
		else {
			die("Query failed");
		}
	}
	
	
	
	
		//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		//Write session data and end session
		header("location: ../member.php");
		exit();
	}

	$password = md5($pass);
	//Create INSERT query
	$qry = "INSERT INTO users VALUES (null,'$email','$password','".$_POST['fnamefield']."','".$_POST['lnamefield']."','member')";
	$result = mysql_query($qry);
	
// if suceesfully inserted data into database, send confirmation link to email 
if($result) {
		$select = mysql_query("SELECT id FROM users order by id DESC limit 1");
		$row = mysql_fetch_array($select);
		echo $row[0];
		$qry2 = "INSERT INTO members VALUES('$row[0]','".$_POST['titlefield']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['cphone']."','".$_POST['lphone']."','".$_POST['houseno']."','".$_POST['emailadd']."','".$_POST['streetno']."'
			,'".$_POST['city']."','".$_POST['zip']."','".$_POST['countryid']."','".$_POST['province']."','".$_POST['facebook']."','".$_POST['twitter']."'
			,'".$_POST['google']."','".$_POST['linkedin']."','".$_POST['blog']."','".$_POST['skype']."','".$_POST['degree']."','".$_POST['degree-date']."'
			,'".$_POST['degree-major']."','".$_POST['degree-minor']."','".$_POST['degree-school']."','".$_POST['degree-country']."','".$_POST['org-title']."'
			,'".$_POST['org-nature']."','".$_POST['super-name']."','".$_POST['super-phone']."','".$_POST['super-email']."','".$_POST['ofc-houseno']."'
			,'".$_POST['ofc-streetno']."','".$_POST['ofc-city']."','".$_POST['ofc-zip']."','".$_POST['ofc-country']."','".$_POST['ofc-province']."'
			,'".$_POST['csa']."','".$_POST['os']."','".$_POST['tw']."','".$_POST['other-member']."','".$_POST['other-member-web']."','".$_POST['positions']."'
					,'".$_POST['itskills']."','".$_POST['work-national']."','".$_POST['knowledge-plan']."','pending')";
		$result2 = @mysql_query($qry2);
		if($result2){
			header("Location: ../../login.php");
		}
		else{
			echo mysql_error();
		}
	}else {
		die("Not found your email in our database" . mysql_error());
	}
?>