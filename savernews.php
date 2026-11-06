<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id_ins1=$_POST['page_id_ins1'];
$page_date=$_POST['page_date'];
$page_time=$_POST['page_time'];
$page_news=$_POST['page_news'];
$page_newsrash=$_POST['page_newsrash'];
$page_bigtext=$_POST['page_bigtext'];
$page_date_kon=$_POST['page_date_kon'];
$page_date_kon1=$_POST['page_date_kon1'];
$page_time_dt=$_POST['page_time_dt'];
$page_key_news=$_POST['page_key_news'];
$page_dt=$_POST['page_dt'];
$page_key_news=$_POST['page_key_news'];
$page_securit=$_POST['page_securit'];



$qr_text="update news set date='".$page_date."',time='".$page_time."',news='".$page_news."',bigtext='".$page_bigtext."',newsrash='".$page_date_kon."',newsrash1='".$page_date_kon1."',dt='".$page_time_dt."',key_news='".$page_key_news."',dt='".$page_dt."',key_news='".$page_key_news."', securit='".$page_securit."' WHERE id=".$page_id_ins1."";

include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    


header("Location: main.php?work=12");

?>