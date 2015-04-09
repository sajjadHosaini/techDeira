<?php
ob_start();
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
	if(isset($_GET['key'])){
		$key=$_GET['key'];
		$qry=mysql_query("SELECT * FROM `users_no_confirm` WHERE `key` ='".$key."'");
		if($qry){
		if(mysql_num_rows($qry)==1){
			$row=mysql_fetch_array($qry);
			$insert=mysql_query("INSERT INTO `users` VALUES(null,'".$row['email_id']."','".$row['password']."','".$row['firstname']."','".$row['lastname']."','".$row['dob']."','".$row['role']."')");
			if ($insert) {
				$select=mysql_query("SELECT * FROM users ORDER BY id desc limit 1");
				$row2=mysql_fetch_array($select);
				if(!$row2){
					die("Failed: " . mysql_error());
				}
				$tab=$row['role'];
				echo $tab;
				$insert_into_child=mysql_query("INSERT INTO $tab VALUES ('".$row2['id']."',null)");
				// Added by Ali Sajjad Hosaini
				if ($insert_into_child){
				if($tab=='member'){
				$inmember=mysql_query("INSERT INTO `participants`(`id`, `firstname`, `surname`, `dob`, `emailadd`,`countryid`,`org_countryid`,`degree-countryid`) VALUES('".$row2['id']."','".$row2['firstname']."','".$row2['lastname']."','".$row2['dob']."','".$row2['email_id']."',3,3,3)"); 
				}
				else {
					$inmember=mysql_query("INSERT INTO `trainee_abade`(`id`, `firstname`, `surname`, `dob`, `emailadd`) VALUES('".$row2['id']."','".$row2['firstname']."','".$row2['lastname']."','".$row2['dob']."','".$row2['email_id']."')");
				}
				}
				// End of Sajjad's code
				else{
					die('Error: ' . mysql_error());
				}
			}
			else{
				echo mysql_error();
			}
			$delete=mysql_query("DELETE FROM `users_no_confirm` WHERE `key` = '".$key."' ");
			if($insert && $delete){
				header("Location: ../login/login.php?confirm=success&name='".$row['firstname']."'");
			}
			else{
				echo "Error occured: " . mysql_error();
			}
		}
		else{
			echo "Your Link is invalid, please try again.";
		}
	}
	else{
		echo "NOT: " . mysql_error();
	}
	}
	else{
		header("Location: ../login/register.php");
	}