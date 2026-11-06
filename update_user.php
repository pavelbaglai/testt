<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_cod_ins = $_POST['page_cod_ins'] ?? '';
$page_id = $_POST['hid_id'] ?? '';
$page_login = $_POST['page_login'] ?? '';
$page_pass = $_POST['page_pass'] ?? '';
$page_type = $_POST['page_type'] ?? '';
$page_fname = $_POST['page_fname'] ?? '';
$page_sname = $_POST['page_sname'] ?? '';
$page_skidka = $_POST['page_skidka'] ?? '';
$page_data = $_POST['page_data'] ?? '';
$page_email = $_POST['page_email'] ?? '';
$page_pr = $_POST['page_pr'] ?? '';



$qr_text=Database::statement('update richstone_user set richstone_user_name=?,richstone_user_password=?,richstone_user_type=?,richstone_user_fio_fname=?,richstone_user_fio_sname=?,richstone_user_skidka=?,richstone_user_data=?,richstone_user_mail=?,richstone_user_pr=? WHERE id=?', [($page_login), ($page_pass), ($page_type), ($page_fname), ($page_sname), ($page_skidka), ($page_data), ($page_email), ($page_pr), (int)($page_id)]);


include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php");
?>