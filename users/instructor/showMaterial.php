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
			$materialselect = mysql_query ( "SELECT * FROM materials WHERE course_id = '" . $_GET['courseid'] . "' ORDER BY material_title" );
			while ( $materialrow = mysql_fetch_array ( $materialselect ) ) {
			echo"	<tr class='mtr".$materialrow['id']."'>
				<td>$count</td>
				<td>".$materialrow['material_title']."</td>
				<td><a
					href='#' class='deleteMaterial'
					onclick='runDelMat(".$materialrow['id'].");'><i
						class='fa fa-times-circle'></i></a></td>
			</tr>";
				$count ++;
			}		
	?>