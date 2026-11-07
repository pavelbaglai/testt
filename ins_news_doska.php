<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){  
header("Location: error.php"); exit; }
$page_name = $_POST['page_name'] ?? '';

$page_info = $_POST['page_info'] ?? '';

$page_fotosmall = $_POST['page_fotosmall'] ?? '';
$page_fotobig = $_POST['page_fotobig'] ?? '';                               

$page_key = $_POST['key'] ?? '';                                                                                                                                                                                                     
$page_dt = $_POST['page_dt'] ?? '';

$qr_text=Database::statement('insert into doska (name,info,fotobig,fotosmall)values(?,?,?,?)', [($page_name), ($page_info), ($page_fotobig), ($page_fotosmall)]);  	

include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php?work=14"); 
?>