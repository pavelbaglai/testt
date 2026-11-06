<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id=$_POST['page_id'];
$page_dr=$_POST['page_dr'];



$qr_text="update dr set vibor='".$page_dr."' WHERE id=".$page_id."";

include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    


header("Location: main.php?work=80");

?>