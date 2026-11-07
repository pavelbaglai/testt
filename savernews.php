<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id_ins1 = $_POST['page_id_ins1'] ?? '';
$page_date = $_POST['page_date'] ?? '';
$page_time = $_POST['page_time'] ?? '';
$page_news = $_POST['page_news'] ?? '';
$page_newsrash = $_POST['page_newsrash'] ?? '';
$page_bigtext = $_POST['page_bigtext'] ?? '';
$page_date_kon = $_POST['page_date_kon'] ?? '';
$page_date_kon1 = $_POST['page_date_kon1'] ?? '';
$page_time_dt = $_POST['page_time_dt'] ?? '';
$page_key_news = $_POST['page_key_news'] ?? '';
$page_dt = $_POST['page_dt'] ?? '';
$page_key_news = $_POST['page_key_news'] ?? '';
$page_securit = $_POST['page_securit'] ?? '';



$qr_text=Database::statement('update news set date=?,time=?,news=?,bigtext=?,newsrash=?,newsrash1=?,dt=?,key_news=?,dt=?,key_news=?, securit=? WHERE id=?', [($page_date), ($page_time), ($page_news), ($page_bigtext), ($page_date_kon), ($page_date_kon1), ($page_time_dt), ($page_key_news), ($page_dt), ($page_key_news), ($page_securit), (int)($page_id_ins1)]);

include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    


header("Location: main.php?work=12");

?>