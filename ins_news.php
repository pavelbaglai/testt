<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){  
header("Location: error.php"); }
$page_name=$_POST['page_name_ins'];
$view_page=$_POST['view_page_ins'];
$page_date=$_POST['page_date'];
$page_time=$_POST['page_time'];
$page_news=$_POST['page_news'];
$page_newsrash=$_POST['page_newsrash'];
$page_bigtext=$_POST['page_bigtext'];
$page_info_ins=$_POST['page_info_ins'];
$page_key_news=$_POST['page_key_news'];
$page_fotosmall=$_POST['page_fotosmall'];
$page_fotobig=$_POST['page_fotobig'];                               
$page_key=$_POST['key'];                                                                                                                                                                                                     
$page_dt=$_POST['page_dt'];

$qr_text="insert into news (date,time,news,bigtext,key_news,fotosmall,fotobig,dt)values('".$page_date."','".$page_time."','".$page_news."','".$page_bigtext."','".$page_key_news."','".$page_fotosmall."','".$page_fotobig."','".$page_dt."')";  	

include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php?work=12"); 
?>