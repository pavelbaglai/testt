<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id=$_POST['hid_id'];
$page_num=$_POST['page_num'];
$page_kat=$_POST['page_kat'];
$page_kat_num=$_POST['page_kat_num'];
$page_menu_num=$_POST['page_menu_num'];
$page_name=$_POST['page_name_upd'];
$view_page_upd=$_POST['view_page_upd'];
$page_alt_name=$_POST['page_alt_name'];
$page_alt_date=$_POST['page_alt_date'];
$page_alt_time=$_POST['page_alt_time'];
$page_alt_dd=$_POST['page_alt_dd'];

$qr_text="update richstone_page set richstone_page_view_flag='".$page_num."',key_menu='".$page_kat."',key_num='".$page_kat_num."',menu='".$page_menu_num."',richstone_page_name='".$page_name."',richstone_page_source='".$view_page_upd."',alt_name='".$page_alt_name."', date='".$page_alt_date."', time='".$page_alt_time."', dt='".$page_alt_dd."' WHERE id=".$page_id."";
include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php?work=2"); 
?>