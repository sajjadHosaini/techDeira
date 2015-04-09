<?php
 session_start();
 include '../../inc/config.inc';;
 $link = mysql_connect ( DB_HOST, DB_USER, DB_PASSWORD );
 mysql_select_db(DB_DATABASE);
 $status=$_POST['status'];
 $firstname=mysql_escape_String($_POST['firstname']);
 $surname=mysql_escape_String($_POST['surname']);
 $dob=mysql_escape_String($_POST['dob']);
 $gender = mysql_escape_String($_POST['gender']); 
 $phonecell = mysql_escape_String($_POST['phone_cell']); 
 $phoneline = mysql_escape_String($_POST['phone_line']);  
 $emailadd = mysql_escape_String($_POST['emailadd']);    
 $extraemail = mysql_escape_String($_POST['extraemail']);    
 $city = mysql_escape_String($_POST['city']);   
 $zip = mysql_escape_String($_POST['zip']); 
 $countryid = mysql_escape_String($_POST['countryname']); 
 $province = mysql_escape_String($_POST['province']);   
 $facebook = mysql_escape_String($_POST['facebook']);   
 $twitter = mysql_escape_String($_POST['twitter']);   
 $googleplus= mysql_escape_String($_POST['googleplus']); 
 $linkedin = mysql_escape_String($_POST['linkedin']);   
 $blog = mysql_escape_String($_POST['blog']);  
 $skype = mysql_escape_String($_POST['skype']);  
 $ot = mysql_escape_String($_POST['org_title']);   
 $org_nature = mysql_escape_String($_POST['org_nature']);  
 $osn = mysql_escape_String($_POST['org_super_name']); 
 $osp = mysql_escape_String($_POST['org_super_phone']);  
 $ose = mysql_escape_String($_POST['org_super_email']);  
 $oc = mysql_escape_String($_POST['org_city']);  
 $oz = mysql_escape_String($_POST['org_zip']);  
 $oci = mysql_escape_String($_POST['org_countryid']);   
 $op = mysql_escape_String($_POST['org_province']);   
 $cm = mysql_escape_String($_POST['CS_Member']);  
 $osm = mysql_escape_String($_POST['OpenSourceMember']); 
 $twm = mysql_escape_String($_POST['TechWomenMember']);  
 $pmon = mysql_escape_String($_POST['pro_member_other_name']);  
 $pmoe = mysql_escape_String($_POST['pro_member_other_email']);
 $positions = mysql_escape_String($_POST['positions']);  
 $itskills = mysql_escape_String($_POST['itskills']);  
 $wen = mysql_escape_String($_POST['work_experience_national']);  
 $kp = mysql_escape_String($_POST['knowledge_plan']);
 $pm_ACSA = $_POST['pm_ACSA'];
 $pm_OSA = $_POST['pm_OSA'];
 $college_university = mysql_escape_String($_POST['college_university']);
 $faculty_concern= mysql_escape_String($_POST['faculty_concern']);
 $degree_award= $_POST['degree_award'];
 $number_semester= mysql_escape_String($_POST['number_semester']);
 $graduation_date= mysql_escape_String($_POST['graduation_date']);
 $number_credit=mysql_escape_String($_POST['number_credit']);
 $grade_point = mysql_escape_String($_POST['grade_point']);
 $list_achievements = mysql_escape_String($_POST['list_achievements']);
 $certification = mysql_escape_String($_POST['certification']);
 if(isset($_GET['id']))
{
 $id=$_GET['id'];
 if(isset($status)){
 $sqlstat = "update trainee_abade set `status`='$status' where `id`=$id";
 $query=mysql_query($sqlstat);
 }
if (isset($firstname)){
 $sqlfirst = "UPDATE `trainee_abade` SET `firstname`='$firstname' WHERE `id`=$id";
 $query=mysql_query($sqlfirst);
 if($query){
	 $sqlufirst = "UPDATE `users` SET `firstname`='$firstname' WHERE `id`=$id";
	 $fuquery=mysql_query($sqlufirst);
 }
 else{
	 echo "Something wrong";
 }
 }
if(isset($surname)){
 $sqlsur = "update trainee_abade set surname='$surname' where id=$id";
 $query=mysql_query($sqlsur);
if($query){
	 $sqlulast = "UPDATE `users` SET `lastname`='$surname' WHERE `id`=$id";
	 $luquery=mysql_query($sqlulast);
 }
 else{
	 echo "Something wrong";
 }
}
 if(isset($gender)){
 $sqlgender = "update `trainee_abade` set `gender`='$gender' where `id`=$id";
 $query=mysql_query($sqlgender);
 }
  if(isset($phonecell)){
 $sqlphone = "update `trainee_abade` set `phone_cell`='$phonecell' where `id`=$id";
 $query=mysql_query($sqlphone);
 }
   if(isset($dob)){
 $sqldob = "update `trainee_abade` set `dob`='$dob' where `id`=$id";
 $query=mysql_query($sqldob);
 if($query){
	 $sqludob = "update `users` set `dob`='$dob' where `id`=$id";
	  $duquery=mysql_query($sqludob);
 }
 else{
	 echo "Something wrong";
 }
 }
   if(isset($phoneline)){
 $sqlphoneline = "update trainee_abade set phone_line='$phoneline' where id=$id";
 $query=mysql_query($sqlphoneline);
 }
   if(isset($city)){
 $sqlcity = "update trainee_abade set city='$city' where id=$id";
 $query=mysql_query($sqlcity);
 }
   if(isset($zip)){
 $sqlzip = "update trainee_abade set zip='$zip' where id=$id";
 $query=mysql_query($sqlzip);
 }
   if(isset($countryid)){
 $sqlcountry = "update trainee_abade set countryname='$countryid' where id=$id";
 $query=mysql_query($sqlcountry);
 }
   if(isset($province)){
 $sqlprovince = "update trainee_abade set province='$province' where id=$id";
 $query=mysql_query($sqlprovince);
 }
   if(isset($facebook)){
 $sqlface = "update trainee_abade set facebook='$facebook' where id=$id";
 $query=mysql_query($sqlface);
 }
   if(isset($twitter)){
 $sqltwit = "update trainee_abade set twitter='$twitter' where id=$id";
 $query=mysql_query($sqltwit);
 }
   if(isset($googleplus)){
 $sqlgoogle = "update trainee_abade set googleplus='$googleplus' where id=$id";
 $query=mysql_query($sqlgoogle);
 }
   if(isset($linkedin)){
 $sqllink = "update trainee_abade set linkedin='$linkedin' where id=$id";
 $query=mysql_query($sqllink);
 }
   if(isset($blog)){
 $sqlblog = "update trainee_abade set blog='$blog' where id=$id";
 $query=mysql_query($sqlblog);
 }
   if(isset($skype)){
 $sqlskype = "update trainee_abade set skype='$skype' where id=$id";
 $query=mysql_query($sqlskype);
 }
    if(isset($extraemail)){
 $sqlextra = "update trainee_abade set extraemail='$extraemail' where id=$id";
 $query=mysql_query($sqlextra);
 }
   if(isset($degree)){
 $sqldeg = "update trainee_abade set degree='$degree' where id=$id";
 $query=mysql_query($sqldeg);
 }
   if(isset($ddc)){
 $sqlddc = "update trainee_abade set degree_date_complete='$ddc' where id=$id";
 $query=mysql_query($sqlddc);
 }
   if(isset($dm)){
 $sqldm = "update trainee_abade set degree_major='$dm' where id=$id";
 $query=mysql_query($sqldm);
 }
   if(isset($dmi)){
 $sqldmi = "update trainee_abade set degree_minor='$dmi' where id=$id";
 $query=mysql_query($sqldmi);
 }
   if(isset($ds)){
 $sqlds = "update trainee_abade set degree_school='$ds' where id=$id";
 $query=mysql_query($sqlds);
 }
   if(isset($dc)){
 $sqldc  = "update trainee_abade set degree_countryid='$dc' where id=$id";
 $query=mysql_query($sqldc);
 }
    if(isset($ot)){
 $sqlot  = "update trainee_abade set org_title='$ot' where id=$id";
 $query=mysql_query($sqlot);
 }
      if(isset($on)){
 $sqlon  = "update trainee_abade set org_nature='$on' where id=$id";
 $query=mysql_query($sqlon);
 }
   if(isset($osn)){
 $sqlosn  = "update trainee_abade set org_super_name='$osn' where id=$id";
 $query=mysql_query($sqlosn);
 }
    if(isset($osp)){
 $sqlosp  = "update trainee_abade set org_super_phone='$osp' where id=$id";
 $query=mysql_query($sqlosp);
 }
    if(isset($ose)){
 $sqlose  = "update trainee_abade set org_super_email='$ose' where id=$id";
 $query=mysql_query($sqlose);
 }
    if(isset($oc)){
 $sqloc  = "update trainee_abade set org_city='$oc' where id=$id";
 $query=mysql_query($sqloc);
 }
    if(isset($oz)){
 $sqloz  = "update trainee_abade set org_zip='$oz' where id=$id";
 $query=mysql_query($sqloz);
 }
    if(isset($oci)){
 $sqloci  = "update trainee_abade set org_countryid='$oci' where id=$id";
 $query=mysql_query($sqloci);
 }
    if(isset($op)){
 $sqlop  = "update trainee_abade set org_province='$op' where id=$id";
 $query=mysql_query($sqlop);
 }
    if(isset($cm)){
 $sqlcm  = "update trainee_abade set CS_Member='$cm' where id=$id";
 $query=mysql_query($sqlcm);
 }
    if(isset($osm)){
 $sqlosm  = "update trainee_abade set OpenSourceMember='$osm' where id=$id";
 $query=mysql_query($sqlosm);
 }
    if(isset($twm)){
 $sqltwm  = "update trainee_abade set TechWomenMember='$twm' where id=$id";
 $query=mysql_query($sqltwm);
 }
    if(isset($pmon)){
 $sqlpmon  = "update trainee_abade set pro_member_other_name='$pmon' where id=$id";
 $query=mysql_query($sqlpmon);
 }
     if(isset($pmoe)){
 $sqlpmoe  = "update trainee_abade set pro_member_other_email='$pmoe' where id=$id";
 $query=mysql_query($sqlpmoe);
 }
     if(isset($positions)){
 $sqlpos  = "update trainee_abade set positions='$positions' where id=$id";
 $query=mysql_query($sqlpos);
 }
     if(isset($itskills)){
 $sqlit  = "update trainee_abade set itskills='$itskills' where id=$id";
 $query=mysql_query($sqlit);
 }
     if(isset($wen)){
 $sqlwen  = "update `trainee_abade` set `work_experience_national`='$wen' where id=$id";
 $query=mysql_query($sqlwen);
 }
      if(isset($kp)){
 $sqlkp  = "update trainee_abade set knowledge_plan='$kp' where id=$id";
 $query=mysql_query($sqlkp);
 }
      if(isset($college_university)){
 $sqlcolleg  = "update trainee_abade set college_university='$college_university' where id=$id";
 $query=mysql_query($sqlcolleg);
 }
      if(isset($faculty_concern)){
 $sqlfaculty  = "update trainee_abade set faculty_concern='$faculty_concern' where id=$id";
 $query=mysql_query($sqlfaculty);
 }
      if(isset($degree_award)){
 $sqldeg  = "update trainee_abade set degree_award='$degree_award' where id=$id";
 $query=mysql_query($sqldeg);
 }
      if(isset($number_semester)){
 $sqlnum  = "update trainee_abade set number_semester='$number_semester' where id=$id";
 $query=mysql_query($sqlnum);
 }
      if(isset($graduation_date)){
 $sqldate  = "update trainee_abade set graduation_date='$graduation_date' where id=$id";
 $query=mysql_query($sqldate);
 }
      if(isset($number_credit)){
 $sqlcredit  = "update trainee_abade set number_credit='$number_credit' where id=$id";
 $query=mysql_query($sqlcredit);
 }
      if(isset($grade_point)){
 $sqlgrade  = "update trainee_abade set grade_point='$grade_point' where id=$id";
 $query=mysql_query($sqlgrade);
 }
      if(isset($list_achievements)){
 $sqlach  = "update trainee_abade set list_achievements='$list_achievements' where id=$id";
 $query=mysql_query($sqlach);
 }
      if(isset($certification)){
 $sqlcer  = "update trainee_abade set certification='$certification' where id=$id";
 $query=mysql_query($sqlcer);
 }
   if(isset($pm_OSA)){
 $sqlosa  = "update trainee_abade set pm_OSA='$pm_OSA' where id=$id";
 $query=mysql_query($sqlosa);
 }
 else{
	 $sqlosa  = "update trainee_abade set pm_OSA='no' where id=$id";
 $query=mysql_query($sqlosa);
 }
   if(isset($pm_ACSA)){
 $sqlacsa  = "update trainee_abade set pm_ACSA='$pm_ACSA' where id=$id";
 $query=mysql_query($sqlacsa);
 }
 else{
	  $sqlacsa  = "update trainee_abade set pm_ACSA='no' where id=$id";
 $query=mysql_query($sqlacsa);
 }
   if(isset($org_nature)){
 $sqlorgnature  = "update trainee_abade set org_nature='$org_nature' where id=$id";
 $query=mysql_query($sqlorgnature);
 }
}
header('Location:viewprofile.php?id='.$id);
$_SESSION['profile']=$id;
?>