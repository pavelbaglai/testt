<?php 
    include("db.php");
    $connect=mysql_connect($host,$username,$passwd);
    $db=mysql_select_db($db_name);	

$datkon=date("d-m-Y");
$datkon1=strtotime($datkon);

$datko=date("H:i:s");
$datko1=strtotime($datko);
$sum=$datkon1+$tatko1;
$sec=0;

//$sql=mysql_query("(SELECT date, richstone_page_name, dt, id, izmena, alt_name, securit FROM richstone_page WHERE dt>=$sum) union (SELECT date, news, dt, id, key_news, newsrash1, securit FROM news WHERE dt>=$sum) order by dt DESC LIMIT 11 ");
$sql=mysql_query("(SELECT date, richstone_page_name, dt, id, izmena, alt_name, securit FROM richstone_page WHERE dt>=$sum AND securit<1) union (SELECT date, news, dt, id, key_news, newsrash1, securit FROM news WHERE dt>=$sum) order by dt DESC LIMIT 14 ");

while ($newss = mysql_fetch_row($sql))
{

//$datko1=strtotime($newss[2]);

 $cut = substr($newss[1], 0, 58);
 $find = '';
 $pos = strrpos($cut, $find);
 $found =substr($newss[1],0,$pos);
 $shorttext=$found.'...';

 $shorttext1=$cut.'...';


$link=$newss[3]-1;


if ($newss[5]==0) {		

echo '<span class="spis7">'.$newss[0].'</span>-<a class="spis5" href="index.php?link='.$link.'">'.$shorttext1.'</a><br>';
}
else {

//$links=$newss[3];

echo '<span class="spis7">'.$newss[0].'</span>-<a class="spis5" href="index.php?link=20&news='.$newss[3].'">'.$shorttext1.'</a><br>';

}
}




?>