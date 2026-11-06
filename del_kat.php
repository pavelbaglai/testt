<?php
require_once __DIR__ . '/src/bootstrap.php';
$user_name = $_COOKIE['user_name'] ?? ''; 
$page_id = $_POST['list_page'] ?? ''; 
$work_id = $_POST['work'] ?? ''; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){  
header("Location: error.php"); exit; }
$id = $_GET['code'] ?? '';
$rass = $_POST['ras'] ?? '';
include("db.php");    		
$qr_text=Database::query('set names cp1251');	
$qr_text=Database::statement('DELETE FROM `richstone_katalog` WHERE id = ?', [(int)($id)]);
$qr=Database::query($qr_text);	
header("Location: main.php?work=5");
?>

