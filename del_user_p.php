<?php
$user_name=$_COOKIE['user_name']; 
$page_id=$_POST['list_page']; 
$work_id=$_POST['work']; 

$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){  
header("Location: error.php"); }
$id = $_GET['code'];
include("db.php");    		
$qr_text=mysql_query('set names cp1251');	
$qr_text="DELETE FROM `telephone`.`richstone_user` WHERE id = $id";
$qr=mysql_query($qr_text);	
header("Location: spravirc.php?work=6");
?>

