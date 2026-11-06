<?php
require_once __DIR__ . '/src/bootstrap.php'; 
$user_flag = $_COOKIE['user_flag'] ?? 0; 
if($user_flag==0){ 
 header("Location: error.php"); exit; }

$page_id_ins1 = $_POST['page_id_ins1'] ?? '';
$page_info_ins1 = $_POST['page_info_ins1'] ?? '';
$page_opis_ins1 = $_POST['page_opis_ins1'] ?? '';
$page_coll_ins1 = $_POST['page_coll_ins1'] ?? '';
$page_date_ins1 = $_POST['page_date_ins1'] ?? '';
$page_cod_ins1 = $_POST['page_cod_ins1'] ?? '';
$page_key_page_ins1 = $_POST['page_key_page_ins1'] ?? '';
$page_key_i_ins1 = $_POST['page_key_i_ins1'] ?? '';
$page_key_num_ins1 = $_POST['page_key_num_ins1'] ?? '';


$dop = $_POST['dop'] ?? '';
$namesl = $_POST['namesl'] ?? '';
$perechen = $_POST['perechen'] ?? '';
$opisdop = $_POST['opisdop'] ?? '';
$dataizm = $_POST['dataizm'] ?? '';
$deistvie = $_POST['deistvie'] ?? '';
$dop = $_POST['dop'] ?? '';
$priznak = $_POST['priznak'] ?? '';

$dr = $_POST['dr'] ?? '';





$qr_text=Database::statement('update blankibzd set namesl=?, dop=?, perechen=?, opisdop=?, dataizm=?, deistvie=?, dop=?, priznak=? WHERE id=?', [($namesl), ($dop), ($perechen), ($opisdop), ($dataizm), ($deistvie), ($dop), ($priznak), (int)($page_id_ins1)]);


include("db.php");    		
$connect=Database::connect();	
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: main.php?work=16?code=1");

?>