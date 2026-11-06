<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id = $_POST['hid_id'] ?? '';
$page_num = $_POST['page_num'] ?? '';
$page_kat = $_POST['page_kat'] ?? '';
$page_kat_num = $_POST['page_kat_num'] ?? '';
$page_menu_num = $_POST['page_menu_num'] ?? '';
$page_name = $_POST['page_name_upd'] ?? '';
$view_page_upd = $_POST['view_page_upd'] ?? '';
$page_alt_name = $_POST['page_alt_name'] ?? '';
$page_alt_date = $_POST['page_alt_date'] ?? '';
$page_alt_time = $_POST['page_alt_time'] ?? '';
$page_alt_dd = $_POST['page_alt_dd'] ?? '';

$qr_text=Database::statement('update richstone_page set richstone_page_view_flag=?,key_menu=?,key_num=?,menu=?,richstone_page_name=?,richstone_page_source=?,alt_name=?, date=?, time=?, dt=? WHERE id=?', [($page_num), ($page_kat), ($page_kat_num), ($page_menu_num), ($page_name), ($view_page_upd), ($page_alt_name), ($page_alt_date), ($page_alt_time), ($page_alt_dd), (int)($page_id)]);
include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php?work=2"); 
?>