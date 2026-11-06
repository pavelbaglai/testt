<?php 
    include("db.php");
    $connect=mysql_connect($host,$username,$passwd);
    $db=mysql_select_db($db_name);	



$datkon=date("d");
$datkon1=date("m");
$sql=mysql_query("SELECT * FROM richstone_page WHERE date like '___$datkon1%' order by date DESC LIMIT 100");
while ($newss = mysql_fetch_row($sql))

{

//$n = 2;
//echo substr($newss[10], 3, $n)."<br>"; 






$link=$newss[0]-1;

echo '
            <span class="spis7">'.$newss[10].'</span>-<a class="spis5" href="index.php?link='.$link.'">'.$newss[1].'</a><br>';
}
//echo "</div>";

?>