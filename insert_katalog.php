<?php
require_once __DIR__ . '/src/bootstrap.php'; 

$user_name = $_COOKIE['user_name'] ?? ''; 
$page_id = $_POST['list_page'] ?? ''; 
$work_id = $_POST['work'] ?? ''; 

$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){  
header("Location: error.php"); exit; }


$page_cod_ins = $_POST['page_cod_ins'] ?? '';
$page_i_ins = $_POST['page_i_ins'] ?? '';
$page_v_ins = $_POST['page_v_ins'] ?? '';
$page_opis_ins = $_POST['page_opis_ins'] ?? '';
$page_name = $_POST['page_katalog_ins'] ?? '';
$page_coll_ins = $_POST['page_coll_ins'] ?? '';
$page_date_ins = $_POST['page_date_ins'] ?? '';
$page_key_page_ins = $_POST['page_key_page_ins'] ?? '';
$page_key_page_i = $_POST['page_key_page_i'] ?? '';       
$page_key_num_ins = $_POST['page_key_num_ins'] ?? '';       
$rass = $_POST['ras'] ?? '';




$page_fname_ins = $_POST['page_fname_ins'] ?? '';
$page_lname_ins = $_POST['page_lname_ins'] ?? '';
$page_name_ins = $_POST['page_name_ins'] ?? '';
$page_user_ins = $_POST['page_user_ins'] ?? '';
$page_office_ins = $_POST['page_office_ins'] ?? '';
$page_email_ins = $_POST['page_email_ins'] ?? '';
$page_email2_ins = $_POST['page_email2_ins'] ?? '';
$page_tel_ins = $_POST['page_tel_ins'] ?? '';
$page_otdel_ins = $_POST['page_otdel_ins'] ?? '';
$page_adress_ins = $_POST['page_adress_ins'] ?? ''; 
$page_s_ins = $_POST['page_s_ins'] ?? '';
$page_b_ins = $_POST['page_b_ins'] ?? '';
$page_date_ins = $_POST['page_date_ins'] ?? '';
$radiobutton = $_POST['radiobutton'] ?? '';





//$qr_text="insert into richstone_katalog (cod,i,information,coll,date,key_page,key_i,key_num,prev,opis)values('".$page_cod_ins."','".$page_i_ins."','".$page_name."','".$page_coll_ins."','".$page_date_ins."','".$page_key_page_ins."','".$page_key_page_i."','".$page_key_num_ins."','".$page_v_ins."','".$page_opis_ins."')";  	
//$qr_text="insert into richstone_katalog (user,office,name,fname,lname,email,tel,otdel,adress,foto,key_num,key_page,foto,bfoto)values('".$page_user_ins."','".$page_office_ins."','".$page_name_ins."','".$page_fname_ins."','".$page_lname_ins."','".$page_email_ins."','".$page_tel_ins."','".$page_otdel_ins."','".$page_adress_ins."','".$page_foto_ins."','".$page_key_num_ins."','".$page_key_page_ins."','".$page_ss_ins."','".$page_bb_ins."')";  	
$qr_text=Database::statement('insert into richstone_katalog (user,office,name,fname,lname,email,email2,tel,otdel,key_num,key_page,sfoto,bfoto,adress,date,radiobutton,cod,i,information,coll,opis,prev,sotovi1,sotovi2)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\')', [($page_user_ins), ($page_office_ins), ($page_name_ins), ($page_fname_ins), ($page_lname_ins), ($page_email_ins), ($page_email2_ins), ($page_tel_ins), ($page_otdel_ins), ($page_key_num_ins), ($page_key_page_ins), ($page_s_ins), ($page_b_ins), ($page_adress_ins), ($page_date_ins), ($radiobutton)]);  	


$host = Database::setting('DB_HOST', '127.0.0.1');
$username = Database::setting('DB_USER', '');
$passwd = Database::setting('DB_PASSWORD', '');
$db_name = Database::setting('DB_NAME', 'telephone'); 
$connect = Database::connect();
$qr=Database::query('set names cp1251');	

$db=Database::selectDatabase($db_name);	


$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php?work=5");

 ?>

