<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }



$pageblankid = $_POST['pageblankid'] ?? '';


$opisdop = $_POST['opisdop'] ?? '';

$qr_text=Database::statement('update blankiname set opisdop=? WHERE id=?', [($opisdop), (int)($pageblankid)]);


include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: main.php?work=16?code=1");

?>