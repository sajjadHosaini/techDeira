<?php
	//Start session
	@session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['USER_ID']) || (trim($_SESSION['USER_ID']) == '')) {
		header("location:../../login/login.php#login");
		exit();
	}
?>