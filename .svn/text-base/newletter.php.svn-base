<?php 
  require_once('inc/config.inc');
     $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$link) {
 die('Failed to connect to server: ' . mysql_error());
}
$sql=mysql_select_db(DB_DATABASE);
if($sql){

//$email=$_POST['email'];
      $submit=$_POST['button'];

      if (isset($submit)) {

            $query=mysql_query("INSERT INTO newsletter VALUES(null,'".$_POST['email']."')");

               if($query){
              echo "inserted";
               }
               else {
              echo mysql_error();
      } 
    }
}
    ?>