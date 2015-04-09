<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['USER_ID']);
	session_destroy();
	header("location: ../index.php");
?>

