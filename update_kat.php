<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id=$_POST['hid_id'];
$page_lname_ins = $_POST["page_lname_ins"];
$page_fname_ins = $_POST["page_fname_ins"];
$page_name_ins = $_POST["page_name_ins"];
$page_user_ins = $_POST["page_user_ins"];
$page_email_ins = $_POST["page_email_ins"];
$page_email2_ins = $_POST["page_email2_ins"];
$page_otdel_ins = $_POST["page_otdel_ins"];
$page_office_ins = $_POST["page_office_ins"];
$page_key_page_ins1 = $_POST["page_key_page_ins1"];
$page_tel_ins = $_POST["page_tel_ins"];
$page_id_ins1 = $_POST["page_id_ins1"];
$page_b_ins = $_POST["page_b_ins"];
$page_s_ins = $_POST["page_s_ins"];
$page_adress_ins = $_POST["page_adress_ins"];


$qr_text="update richstone_katalog set lname='".$page_lname_ins."', fname='".$page_fname_ins."', name='".$page_name_ins."',user='".$page_user_ins."', email='".$page_email_ins."', email2='".$page_email2_ins."', otdel='".$page_otdel_ins."',office='".$page_office_ins."',tel='".$page_tel_ins."', sfoto='".$page_s_ins."',bfoto='".$page_b_ins."',adress='".$page_adress_ins."' WHERE id=".$page_id."";


include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    
header("Location: main.php");
?>