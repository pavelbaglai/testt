<?php
require_once __DIR__ . '/src/bootstrap.php'; 
    include("db.php");
    $connect=Database::connect();
    $db=Database::selectDatabase($db_name);	



$datkon=date("d");
$datkon1=date("m");
$sql=Database::query(Database::statement('SELECT * FROM richstone_page WHERE date like ? order by date DESC LIMIT 100', ['___' . ($datkon1) . '%']));
while ($newss = Database::fetchRow($sql))

{

//$n = 2;
//echo substr($newss[10], 3, $n)."<br>"; 






$link=$newss[0]-1;

echo '
            <span class="spis7">'.$newss[10].'</span>-<a class="spis5" href="index.php?link='.$link.'">'.$newss[1].'</a><br>';
}
//echo "</div>";

?>