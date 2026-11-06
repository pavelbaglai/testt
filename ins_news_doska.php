<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){  
header("Location: error.php"); }
$page_name=$_POST['page_name'];

$page_info=$_POST['page_info'];

$page_fotosmall=$_POST['page_fotosmall'];
$page_fotobig=$_POST['page_fotobig'];                               

$page_key=$_POST['key'];                                                                                                                                                                                                     
$page_dt=$_POST['page_dt'];

$qr_text="insert into doska (name,info,fotobig,fotosmall)values('".$page_name."','".$page_info."','".$page_fotobig."','".$page_fotosmall."')";  	

include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php?work=14"); 
?>