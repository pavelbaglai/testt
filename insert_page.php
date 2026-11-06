<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){  
header("Location: error.php"); }
$page_name=$_POST['page_name_ins'];
$view_page=$_POST['view_page_ins'];
$qr_text="insert into richstone_page (richstone_page_name,richstone_page_source,richstone_page_view_flag)values('".$page_name."','".$view_page."',1)";  	
$host='localhost';
$username='root';
$passwd='web2012irc';
$db_name='telephone';
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php?work=1");
 ?>