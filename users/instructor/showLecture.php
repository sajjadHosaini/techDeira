<?php
require '../../execute/auth.php';
include '../../inc/config.inc';
$link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
if (! $link) {
	die ( 'Failed to connect to server: ' . mysql_error () );
}

// Select database
$db = mysql_select_db ( DB_DATABASE );
if (! $db) {
	die ( "Unable to select database" );
}
	$count = 1;
	$lectureselect = mysql_query ( "SELECT * FROM lectures WHERE course_id = '" . $_GET['courseid'] . "' ORDER BY date desc" );
	while ($lecturerow = mysql_fetch_array($lectureselect)) { 
	echo "<tr class='ltr".$lecturerow['id']."'>
					<td> $count</td>
					<td> ".$lecturerow['lecture_title']."</td>
					<td> ".$lecturerow['date']."</td>
					<td><a href='#' onclick='runDelLec(".$lecturerow['id'].");' class='deleteLecture' name=".$lecturerow['id'].">
						<i class='fa fa-times-circle'></i></a></td>
				</tr>";
		$count ++;
	}
	?>