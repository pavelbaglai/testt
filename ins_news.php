<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){  
header("Location: error.php"); exit; }
$page_name = $_POST['page_name_ins'] ?? '';
$view_page = $_POST['view_page_ins'] ?? '';
$page_date = $_POST['page_date'] ?? '';
$page_time = $_POST['page_time'] ?? '';
$page_news = $_POST['page_news'] ?? '';
$page_newsrash = $_POST['page_newsrash'] ?? '';
$page_bigtext = $_POST['page_bigtext'] ?? '';
$page_info_ins = $_POST['page_info_ins'] ?? '';
$page_key_news = $_POST['page_key_news'] ?? '';
$page_fotosmall = $_POST['page_fotosmall'] ?? '';
$page_fotobig = $_POST['page_fotobig'] ?? '';                               
$page_key = $_POST['key'] ?? '';                                                                                                                                                                                                     
$page_dt = $_POST['page_dt'] ?? '';

$qr_text=Database::statement('insert into news (date,time,news,bigtext,key_news,fotosmall,fotobig,dt,newsrash)values(?,?,?,?,?,?,?,?,\'\')', [($page_date), ($page_time), ($page_news), ($page_bigtext), ($page_key_news), ($page_fotosmall), ($page_fotobig), ($page_dt)]);  	

include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
header("Location: main.php?work=12"); 
?>