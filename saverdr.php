<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id = $_POST['page_id'] ?? '';
$page_dr = $_POST['page_dr'] ?? '';



$qr_text=Database::statement('update dr set vibor=? WHERE id=?', [($page_dr), (int)($page_id)]);

include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    


header("Location: main.php?work=80");

?>