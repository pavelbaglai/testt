<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id = $_POST['hid_id'] ?? '';
$page_lname_ins = $_POST["page_lname_ins"] ?? '';
$page_fname_ins = $_POST["page_fname_ins"] ?? '';
$page_name_ins = $_POST["page_name_ins"] ?? '';
$page_user_ins = $_POST["page_user_ins"] ?? '';
$page_email_ins = $_POST["page_email_ins"] ?? '';
$page_email2_ins = $_POST["page_email2_ins"] ?? '';
$page_otdel_ins = $_POST["page_otdel_ins"] ?? '';
$page_office_ins = $_POST["page_office_ins"] ?? '';
$page_key_page_ins1 = $_POST["page_key_page_ins1"] ?? '';
$page_tel_ins = $_POST["page_tel_ins"] ?? '';
$page_id_ins1 = $_POST["page_id_ins1"] ?? '';
$page_b_ins = $_POST["page_b_ins"] ?? '';
$page_s_ins = $_POST["page_s_ins"] ?? '';
$page_adress_ins = $_POST["page_adress_ins"] ?? '';


$qr_text=Database::statement('update richstone_katalog set lname=?, fname=?, name=?,user=?, email=?, email2=?, otdel=?,office=?,tel=?, sfoto=?,bfoto=?,adress=? WHERE id=?', [($page_lname_ins), ($page_fname_ins), ($page_name_ins), ($page_user_ins), ($page_email_ins), ($page_email2_ins), ($page_otdel_ins), ($page_office_ins), ($page_tel_ins), ($page_s_ins), ($page_b_ins), ($page_adress_ins), (int)($page_id)]);


include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php");
?>