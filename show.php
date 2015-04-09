<?php 
include 'inc/config.inc';

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
	die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db(DB_DATABASE);
if(!$db) {
	die("Unable to select database");
}

$sql = mysql_query("SELECT * FROM `temp_registers1`");
if(!$sql){
	echo mysql_error();
}
?>
<h1>TechDeira Classes Regisration List</h1>
<?php
echo "<table border='1'>";
?>
<tr><td>#</td><td>Fullname</td><td>Email</td><td>Cellphone</td><td>Web</td><td>Java</td><td>Linux</td></tr>

<?php
$count=1;
while($row = mysql_fetch_array($sql)){
	?>
	<tr><td><?php echo $count; ?></td><td><?php echo $row['fullname']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['cellphone']; ?></td><td><?php echo $row['isWeb']; ?></td><td><?php echo $row['isJava']; ?></td><td><?php echo $row['isLinux']; ?></td></tr>
	<?php
	$count++;
}
echo "</table>";
?>