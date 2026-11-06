<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }

$page_id_ins1=$_POST['page_id_ins1'];
$page_info_ins1=$_POST['page_info_ins1'];
$page_opis_ins1=$_POST['page_opis_ins1'];
$page_coll_ins1=$_POST['page_coll_ins1'];
$page_date_ins1=$_POST['page_date_ins1'];
$page_cod_ins1=$_POST['page_cod_ins1'];
$page_key_page_ins1=$_POST['page_key_page_ins1'];
$page_key_i_ins1=$_POST['page_key_i_ins1'];
$page_key_num_ins1=$_POST['page_key_num_ins1'];


$dop=$_POST['dop'];
$namesl=$_POST['namesl'];
$perechen=$_POST['perechen'];
$opisdop=$_POST['opisdop'];
$dataizm=$_POST['dataizm'];
$deistvie=$_POST['deistvie'];
$dop=$_POST['dop'];
$priznak=$_POST['priznak'];

$dr=$_POST['dr'];





$qr_text="update blankibzd set namesl='".$namesl."', dop='".$dop."', perechen='".$perechen."', opisdop='".$opisdop."', dataizm='".$dataizm."', deistvie='".$deistvie."', dop='".$dop."', priznak='".$priznak."' WHERE id=".$page_id_ins1."";


include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: spravirc.php?work=16");

?>