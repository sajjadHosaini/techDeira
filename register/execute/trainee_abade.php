<?php
session_start ();
include ('../../inc/config.inc');
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

// Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
	$str = @trim ( $str );
	if (get_magic_quotes_gpc ()) {
		// Gets the current configuration setting of magic_quotes_gpc
		// Sets the magic_quotes state for GPC (Get/Post/Cookie) operations. When magic_quotes are on, all ' (single-quote), " (double quote), \ (backslash) and NUL's are escaped with a backslash automatically.
		$str = stripslashes ( $str );
		
		// Un-quotes a quoted string
	}
	return mysql_real_escape_string ( $str );
	
	// Escapes special characters in a string for use in an SQL statement
}

$qry2 = "INSERT INTO trainee_abade VALUES(null,'" . $_POST ['surnamefield'] . "','" . $_POST ['fnamefield'] . "','" . $_POST ['dob'] . "','" . $_POST ['gender'] . "','" . $_POST ['cphone'] . "','" . $_POST ['lphone'] . "','" . $_POST ['emailadd'] . "','" . $_POST ['houseno'] . "','" . $_POST ['streetno'] . "'
			,'" . $_POST ['city'] . "','" . $_POST ['zip'] . "','" . $_POST ['countryid'] . "','" . $_POST ['province'] . "','" . $_POST ['facebook'] . "','" . $_POST ['twitter'] . "'
			,'" . $_POST ['google'] . "','" . $_POST ['linkedin'] . "','" . $_POST ['blog'] . "','" . $_POST ['skype'] . "','" . $_POST ['degree'] . "','" . $_POST ['degree-date'] . "'
			,'" . $_POST ['degree-major'] . "','" . $_POST ['degree-minor'] . "','" . $_POST ['degree-school'] . "','" . $_POST ['degree-country'] . "','" . $_POST ['org-title'] . "'
			,'" . $_POST ['org-nature'] . "','" . $_POST ['super-name'] . "','" . $_POST ['super-phone'] . "','" . $_POST ['super-email'] . "','" . $_POST ['ofc-houseno'] . "'
			,'" . $_POST ['ofc-streetno'] . "','" . $_POST ['ofc-city'] . "','" . $_POST ['ofc-zip'] . "','" . $_POST ['ofc-country'] . "','" . $_POST ['ofc-province'] . "'
			,'" . $_POST ['csa'] . "','" . $_POST ['os'] . "','" . $_POST ['tw'] . "','" . $_POST ['other-member'] . "','" . $_POST ['other-member-web'] . "','" . $_POST ['positions'] . "'
					,'" . $_POST ['itskills'] . "','" . $_POST ['work-national'] . "','" . $_POST ['knowledge-plan'] . "','pending')";
$result2 = @mysql_query ( $qry2 );
if ($result2) {
	header ( "Location: ../../index.php?ta_register=success" );
} else {
	echo mysql_error ();
}
?>