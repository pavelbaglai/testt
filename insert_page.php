<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){  
header("Location: error.php"); exit; }
$page_name = $_POST['page_name_ins'] ?? '';
$view_page = $_POST['view_page_ins'] ?? '';
$qr_text=Database::statement('insert into richstone_page (richstone_page_name,richstone_page_source,richstone_page_view_flag,date,time,dt,nameotd)values(?,?,1,\'\',\'\',\'\',\'\')', [($page_name), ($view_page)]);  	
$host = Database::setting('DB_HOST', '127.0.0.1');
$username = Database::setting('DB_USER', '');
$passwd = Database::setting('DB_PASSWORD', '');
$db_name = Database::setting('DB_NAME', 'telephone');
$connect=Database::connect();
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php?work=1");
 ?>