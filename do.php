<?php
session_start();

//Include database connection details
require_once('inc/config.inc');

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
$qry = mysql_query("DELETE * FROM temp_registers1");
if(!$qry){
	echo mysql_error();
}
/*
$qry = mysql_query("CREATE TABLE IF NOT EXISTS `temp_registers1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `address` text,
  `gender` varchar(10) DEFAULT NULL,
  `homephone` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob-day` varchar(20) DEFAULT NULL,
  `dob-month` varchar(20) DEFAULT NULL,
  `dob-year` varchar(20) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `isWeb` varchar(10) DEFAULT NULL,
  `isJava` varchar(10) DEFAULT NULL,
  `isLinux` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
if($qry){
	echo "GOOD";
}
else{
	echo mysql_error();
}

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
