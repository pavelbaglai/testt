<?php 
$user_flag=$_COOKIE['user_flag']; 
if($user_flag==0){ 
 header("Location: error.php"); }



$pageblankid=$_POST['pageblankid'];


$opisdop=$_POST['opisdop'];

$qr_text="update blankiname set opisdop='".$opisdop."' WHERE id=".$pageblankid."";


include("db.php");    		
$connect=mysql_connect($host,$username,$passwd);	
$qr=mysql_query('set names cp1251');	
$db=mysql_select_db($db_name);	
$qr=mysql_query($qr_text);	
mysql_close($connect);    

//$url=<A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='textcolg'>Вернуться назад</A>;

header("Location: main.php?work=16?code=1");

?>