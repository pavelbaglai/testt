<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id_ins1=$_POST['page_id_ins1'];
$page_info_ins1=$_POST['page_info_ins1'];
$page_opis_ins1=$_POST['page_opis_ins1'];
$page_coll_ins1=$_POST['page_coll_ins1'];
$page_date_ins1=$_POST['page_date_ins1'];
$page_cod_ins1=$_POST['page_cod_ins1'];
$page_key_page_ins1=$_POST['page_key_page_ins1'];
$page_key_i_ins1=$_POST['page_key_i_ins1'];
$page_key_num_ins1=$_POST['page_key_num_ins1'];





$page_fname_ins=$_POST['page_fname_ins'];
$page_lname_ins=$_POST['page_lname_ins'];
$page_name_ins=$_POST['page_name_ins'];
$page_user_ins=$_POST['page_user_ins'];
$page_office_ins=$_POST['page_office_ins'];
$page_email_ins=$_POST['page_email_ins'];
$page_email2_ins=$_POST['page_email2_ins'];
$page_tel_ins=$_POST['page_tel_ins'];
$page_tel1_ins=$_POST['page_tel1_ins'];
$page_tel2_ins=$_POST['page_tel2_ins'];
$page_otdel_ins=$_POST['page_otdel_ins'];
$page_adress_ins=$_POST['page_adress_ins'];
$page_s_ins=$_POST['page_s_ins'];
$page_b_ins=$_POST['page_b_ins'];
$radiobutton=$_POST['radiobutton'];
$dr=$_POST['dr'];



//$qr_text="insert into richstone_katalog (user,office,name,fname,lname,email,tel,otdel,adress,key_num,key_page,sfoto,bfoto)values('".$page_user_ins."','".$page_office_ins."','".$page_name_ins."','".$page_fname_ins."','".$page_lname_ins."','".$page_email_ins."','".$page_tel_ins."','".$page_otdel_ins."','".$page_adress_ins."','".$page_key_num_ins."','".$page_key_page_ins."','".$page_s_ins."','".$page_b_ins."')";  	


$qr_text="update richstone_katalog set fname='".$page_fname_ins."', lname='".$page_lname_ins."', name='".$page_name_ins."', user='".$page_user_ins."', office='".$page_office_ins."', email='".$page_email_ins."', email2='".$page_email2_ins."', tel='".$page_tel_ins."', sotovi1='".$page_tel1_ins."', sotovi2='".$page_tel2_ins."', otdel='".$page_otdel_ins."', key_page='".$page_key_page_ins1."', key_i='".$page_key_i_ins1."', key_num='".$page_key_num_ins1."', adress='".$page_adress_ins."', radiobutton='".$radiobutton."', dr='".$dr."' WHERE id=".$page_id_ins1."";


include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: main.php?work=5?code=1");

?>