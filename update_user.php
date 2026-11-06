<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_cod_ins=$_POST['page_cod_ins'];
$page_id=$_POST['hid_id'];
$page_login=$_POST['page_login'];
$page_pass=$_POST['page_pass'];
$page_type=$_POST['page_type'];
$page_fname=$_POST['page_fname'];
$page_sname=$_POST['page_sname'];
$page_skidka=$_POST['page_skidka'];
$page_data=$_POST['page_data'];
$page_email=$_POST['page_email'];
$page_pr=$_POST['page_pr'];



$qr_text="update richstone_user set richstone_user_name='".$page_login."',richstone_user_password='".$page_pass."',richstone_user_type='".$page_type."',richstone_user_fio_fname='".$page_fname."',richstone_user_fio_sname='".$page_sname."',richstone_user_skidka='".$page_skidka."',richstone_user_data='".$page_data."',richstone_user_mail='".$page_email."',richstone_user_pr='".$page_pr."' WHERE id=".$page_id."";


include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php");
?>