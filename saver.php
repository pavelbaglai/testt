<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id_ins1 = $_POST['page_id_ins1'] ?? '';
$page_info_ins1 = $_POST['page_info_ins1'] ?? '';
$page_opis_ins1 = $_POST['page_opis_ins1'] ?? '';
$page_coll_ins1 = $_POST['page_coll_ins1'] ?? '';
$page_date_ins1 = $_POST['page_date_ins1'] ?? '';
$page_cod_ins1 = $_POST['page_cod_ins1'] ?? '';
$page_key_page_ins1 = $_POST['page_key_page_ins1'] ?? '';
$page_key_i_ins1 = $_POST['page_key_i_ins1'] ?? '';
$page_key_num_ins1 = $_POST['page_key_num_ins1'] ?? '';





$page_fname_ins = $_POST['page_fname_ins'] ?? '';
$page_lname_ins = $_POST['page_lname_ins'] ?? '';
$page_name_ins = $_POST['page_name_ins'] ?? '';
$page_user_ins = $_POST['page_user_ins'] ?? '';
$page_office_ins = $_POST['page_office_ins'] ?? '';
$page_email_ins = $_POST['page_email_ins'] ?? '';
$page_email2_ins = $_POST['page_email2_ins'] ?? '';
$page_tel_ins = $_POST['page_tel_ins'] ?? '';
$page_tel1_ins = $_POST['page_tel1_ins'] ?? '';
$page_tel2_ins = $_POST['page_tel2_ins'] ?? '';
$page_otdel_ins = $_POST['page_otdel_ins'] ?? '';
$page_adress_ins = $_POST['page_adress_ins'] ?? '';
$page_s_ins = $_POST['page_s_ins'] ?? '';
$page_b_ins = $_POST['page_b_ins'] ?? '';
$radiobutton = $_POST['radiobutton'] ?? '';
$dr = $_POST['dr'] ?? '';



//$qr_text="insert into richstone_katalog (user,office,name,fname,lname,email,tel,otdel,adress,key_num,key_page,sfoto,bfoto)values('".$page_user_ins."','".$page_office_ins."','".$page_name_ins."','".$page_fname_ins."','".$page_lname_ins."','".$page_email_ins."','".$page_tel_ins."','".$page_otdel_ins."','".$page_adress_ins."','".$page_key_num_ins."','".$page_key_page_ins."','".$page_s_ins."','".$page_b_ins."')";  	


$qr_text=Database::statement('update richstone_katalog set fname=?, lname=?, name=?, user=?, office=?, email=?, email2=?, tel=?, sotovi1=?, sotovi2=?, otdel=?, key_page=?, key_i=?, key_num=?, adress=?, radiobutton=?, dr=? WHERE id=?', [($page_fname_ins), ($page_lname_ins), ($page_name_ins), ($page_user_ins), ($page_office_ins), ($page_email_ins), ($page_email2_ins), ($page_tel_ins), ($page_tel1_ins), ($page_tel2_ins), ($page_otdel_ins), ($page_key_page_ins1), ($page_key_i_ins1), ($page_key_num_ins1), ($page_adress_ins), ($radiobutton), ($dr), (int)($page_id_ins1)]);


include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: main.php?work=5?code=1");

?>